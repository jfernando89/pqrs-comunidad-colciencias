<?php

class GACController extends Controller {
	
	public $defaultAction = 'principalGAC';
	public $layout = '//layouts/mainGAC';
	
	public function actionAsignarTipologia() {
		// traer todos los pqrs
		$pqrs = Pqrs::model()->with(array(
										'subtema0',
										'contacto0',
										'dependencia0'))->findAll();   

		// traer todos los que ya estan digitalizados
		$digitalizados = Historico::model()->findAll('operacion=2');	// 2 = Actualizado

		// eliminar de la lista los ya digitalizados
		$pqrs_temp = array();
		$cont = 0;
		$flag = false;
		
		for($i = 0; $i < count( $pqrs ); $i++) {
			$flag = false;
			
			for( $j = 0; $j < count( $digitalizados ); $j++ ) {
				if( $digitalizados[$j]->pqrs == $pqrs[$i]->id ) {
					$flag = true;
					break;
				}
			}
			
			if( $flag == false ) {
				$pqrs_temp[$cont++] = $pqrs[$i];
			}			
		}
		
		// convertir a dataProvider
    	$dataProvider=new CArrayDataProvider($pqrs_temp);

    	// mostrar la vista correspondiente
		$this->render('AsignarTipologia',array('dataProvider'=>$dataProvider));
	}
	
	public function actionVerAsignarTipologia( $pqrs, $error = '' ) {
		// por defecto
		$model = new AsignarTipologiaPQRSForm;

		// primera vez que se muestra la pagina
		$model->tipoPQRS = 'Fisico';
		
		$pqrs = PQRS::model()->find('id='.$pqrs);
			
		$model->pqrs = $pqrs->id;
		$model->id = $pqrs->contacto;
		
		// obtener el nombre de la dependencia
		$dependencia = Dependencia::model()->find('id='.$pqrs->dependencia);
		$model->dependencia = $dependencia->nombre;
		
		$model->modoRecepcion = 'Ventanilla';
		
		// obtener el nombre del subtema
		$subtema = Subtema::model()->find('id='.$pqrs->subtema);
		$model->temaCiudadano = $subtema->nombre;
		
		$model->asunto = $pqrs->asunto;
		
		// temas
		$result = Tema::model()->findAll();
		$temas = array();
		
		foreach( $result as $tema ) {
			$temas[$tema->id] = $tema->nombre;
		}
		
		// subtemas
		$subtemas = array();
		
		// llamar la vista
		$this->render('VerAsignarTipologia',array('model'=>$model,'temas'=>$temas,'subtemas'=>$subtemas,'error'=>$error));
	}
	
	public function actionListaSubtemas() {
		$tema = (int) $_POST['AsignarTipologiaPQRSForm']['tema'];
		$subtemas = CHtml::listData(Subtema::model()->findAll('tema =:tema', array(':tema'=>$tema)), 'id', 'nombre');
	
		foreach ($subtemas as $valor => $subtema) {
			echo CHtml::tag('option', array('value'=>$valor), CHtml::encode($subtema), true);
		}
	}
	
	public function actionGuardarAsignarTipologia() {
		$model = new AsignarTipologiaPQRSForm;
		$model->attributes=$_POST['AsignarTipologiaPQRSForm'];

		if($model->validate()) {	// pasa la validacion
			$pqrs = new pqrs;
			$pqrs = PQRS::model()->find('id='.$_POST['AsignarTipologiaPQRSForm']['pqrs']);
			$pqrs->subtema = $_POST['AsignarTipologiaPQRSForm']['subtema'];
			$pqrs->save();

			// crear el historico
			$historico = new Historico;
			$historico->fecha = date('Y/m/d');
			$historico->operacion = 2; // Actualizado
			$historico->usuario = 1; // GAC por defecto siempre 1
			$historico->pqrs = $_POST['AsignarTipologiaPQRSForm']['pqrs'];			
			$historico->save();
			
			$this->redirect('index.php?r=GAC/AsignarTipologia');
		}
		else {
			$this->actionVerAsignarTipologia($_POST['AsignarTipologiaPQRSForm']['pqrs'],'Debe Seleccionar un Subtema');
		}
	}

	public function actionCrearRespuesta()
	{
		$this->render('CrearRespuesta');
	}

	public function actionIncluirExpediente() {
		// traer todos los pqrs
		$pqrs = Pqrs::model()->with(array(
										'subtema0',
										'contacto0',				
										'dependencia0'))->findAll();
			
		// traer todos los que ya estan digitalizados
		$incluidos = Historico::model()->findAll('operacion=4');	// 4 = Incluido

		// eliminar de la lista los ya digitalizados
		$pqrs_temp = array();
		$cont = 0;
		$flag = false;
		
		for($i = 0; $i < count( $pqrs ); $i++) {
			$flag = false;
			
			for( $j = 0; $j < count( $incluidos ); $j++ ) {
				if( $incluidos[$j]->pqrs == $pqrs[$i]->id ) {
					$flag = true;
					break;
				}
			}
			
			if( $flag == false ) {
				$pqrs_temp[$cont++] = $pqrs[$i];
			}			
		}
		
		// convertir a dataProvider
    	$dataProvider=new CArrayDataProvider($pqrs_temp);

    	// mostrar la vista correspondiente
		$this->render('IncluirExpediente',array('dataProvider'=>$dataProvider));
	}
	
	public function actionVerIncluirExpediente( $pqrs, $error = '' ) {
		// por defecto
		$model = new ExpedienteForm;
	
		// primera vez que se muestra la pagina
		$pqrs = PQRS::model()->find('id='.$pqrs);
			
		$model->pqrs = $pqrs->id;
		$model->expediente = 1;
	
		// obtener el nombre de la dependencia
		$expedientes = Expediente::model()->findAll();
	
		$dependencias = array();
		$usuarios = array();
	
		// llamar la vista
		$this->render('VerIncluirExpediente',array('model'=>$model,'expedientes'=>$expedientes,
												  'dependencias'=>$dependencias,'usuarios'=>$usuarios,'error'=>$error));
	}

	public function actionListaRespuestasPendientesImprimir()
	{
		$this->render('ListaRespuestasPendientesImprimir');
	}

	public function actionPrincipalGAC()
	{
		$this->render('PrincipalGAC');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}