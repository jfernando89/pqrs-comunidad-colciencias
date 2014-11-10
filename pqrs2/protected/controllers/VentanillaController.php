<?php

class VentanillaController extends Controller
{
	
	public $defaultAction = 'index';
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page'=>array(
						'class'=>'CViewAction',
				),
		);
	}
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error, array('erro'=>$error['message']));
		}
	}
	
    public function actionListaDepartamentos() {
        $pais = (int) $_POST['ContactoForm']['pais'];
        $departamentos = CHtml::listData(Departamentos::model()->findAll('pais =:pais', array(':pais'=>$pais)), 'id', 'nombre');

        echo CHtml::tag('option', array('value'=>''), ' ', true);
        
        foreach ($departamentos as $valor=>$departamento) {
            echo CHtml::tag('option', array('value'=>$valor), CHtml::encode($departamento), true);
        }
    }

    public function actionListaCiudades() {
        $departamento = (int) $_POST ['ContactoForm']['departamento'];
        $ciudades = CHtml::listData(Ciudades::model()->findAll('departamento =:departamento', array(':departamento'=>$departamento)), 'id', 'nombre');

        foreach ($ciudades as $valor => $ciudad) {
            echo CHtml::tag('option', array('value'=>$valor), CHtml::encode($ciudad), true);
        }
    }

    public function actionListaSubtemas() {
    	$tema = (int) $_POST['RadicarPQRSForm']['tema'];
    	$subtemas = CHtml::listData(Subtema::model()->findAll('tema =:tema', array(':tema'=>$tema)), 'id', 'nombre');
    
    	foreach ($subtemas as $valor => $subtema) {
    		echo CHtml::tag('option', array('value'=>$valor), CHtml::encode($subtema), true);
    	}
    }
	
	public function actionBusquedaSeleccionContactos() {
		$model = new ContactoForm;
		$tiposId = ['Ciudadano','Empresa'];
			
		if (isset($_POST['ContactoForm'])) {
			// collects user input data
	        $model->tipoId = $_POST['ContactoForm']['tipoId'];

	        // Select the correct data provider
	        if( $model->tipoId == 0 ) {	// Ciudadanos
	        	$ciudadano = new Ciudadanos;
	        	$ciudadano->id = $_POST['ContactoForm']['id'];
	        	$ciudadano->nombres = $_POST['ContactoForm']['nombre'];
	        	$ciudadano->primerApelldio = $_POST['ContactoForm']['primerApellido'];

	        	$dataProvider = $ciudadano->search();//new CActiveDataProvider('Ciudadanos');
	        }
	        else {	// Empresas
	        	$empresa = new Empresas;
	        	$empresa->nit = $_POST['ContactoForm']['id'];
	        	$empresa->nombre = $_POST['ContactoForm']['nombre'];

	        	$dataProvider = $empresa->search();//new CActiveDataProvider('Empresas');
	        }
	        	
	        // validates user input and redirect to previous page if validated
	        $this->render('BusquedaSeleccionContactos',array('model'=>$model,
 	            										     'tiposId'=>$tiposId,
 	            											 'dataProvider'=>$dataProvider));
		 }
		 else { 
				$this->render('BusquedaSeleccionContactos',array('model'=>$model,'tiposId'=>$tiposId));		
		 }
	}

	public function actionCrearContacto() {
		$model1 = new Ciudadanos;
		$model2 = new Empresas;
		$model = new ContactoForm;
		
		if(isset($_POST['ContactoForm']) && $_POST['ContactoForm']['tipoContacto']=='Ciudadano')
		{
			$model1->attributes=$_POST['Ciudadanos'];
			if($model1->validate())
			{
				$contacto = new Contactos;
				$contacto->id = $model1->id;
				$contacto->save();
				
				$model1->save();
				unset($_POST);
				$this->actionBusquedaSeleccionContactos();
				return;
			}
		}
		else if(isset($_POST['ContactoForm']) && $_POST['ContactoForm']['tipoContacto']=='Empresa') {
			$model2->attributes=$_POST['Empresas'];
			if($model2->validate())
			{
				$contacto = new Contactos;
				$contacto->id = $model2->id;
				$contacto->save();
				
				$model2->save();
				unset($_POST);
				$this->actionBusquedaSeleccionContactos();
				return;
			}
		}
		
		// por defecto
		$model->tipoContacto = 'Ciudadano';
				
		// lista de tipos de documentos
		$result = TiposDocumento::model()->findAll();
		$tiposId = array();
		
		foreach( $result as $tipoId ) {		
			$tiposId[$tipoId->id] = $tipoId->nombre;		
		}
		
		// lista de paises
		$result = Paises::model()->findAll();
		$paises = array();
		
		foreach( $result as $pais ) {
			$paises[$pais->id] = $pais->nombre;
		}
		
		// llamar la vista
		$this->render('CrearContacto',array('model'=>$model,'model1'=>$model1,'model2'=>$model2,'tiposId'=>$tiposId,'paises'=>$paises));

	}

	public function actionListaComprobantesEntrega()
	{
		$this->render('ListaComprobantesEntrega');
	}

	public function actionListaPQRSPendientesArchivar()
	{
		$this->render('ListaPQRSPendientesArchivar');
	}

	public function actionListaPQRSPendientesDigitalizar() {
		// traer todos los pqrs
		$pqrs = Pqrs::model()->with(array(
										'subtema0',
										'gac0',
										'contacto0',
										'dependencia0'))->findAll();   

		// traer todos los que ya estan digitalizados
		$digitalizados = Historico::model()->findAll('operacion=3');	// 3 = Digitalizado

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
		$this->render('ListaPQRSPendientesDigitalizar',array('dataProvider'=>$dataProvider));
	}
	
	public function actionDigitalizar( $pqrs ) {
		// crear el historico
		$historico = new Historico;
		$historico->fecha = date('Y/m/d');
		$historico->operacion = 3; // Digitalizado
		$historico->usuario = 2; // Ventanilla por defecto siempre 2
		$historico->pqrs = $pqrs;
		
		$historico->save();
		
		// llamar de nuevo a la digitalizacion
		$this->redirect('index.php?r=ventanilla/listaPQRSPendientesDigitalizar');
	}

	public function actionRadicarPQRS()	{	
		// por defecto
		$model = new RadicarPQRSForm;
		
		if( isset( $_POST['RadicarPQRSForm'] ) ) {	
 			$model->attributes=$_POST['RadicarPQRSForm'];
 						
			if($model->validate()) {	// pasa la validacion
				$pqrs = new pqrs;
				
				if( isset( $_POST['RadicarPQRSForm']['id'] ) ) { // ciudadano
					$pqrs->contacto = $_POST['RadicarPQRSForm']['id'];
				}
				else {  // empresa
					$pqrs->contacto = $_POST['RadicarPQRSForm']['nit'];
				}	
				
				$pqrs->dependencia = 22;	// GAC
				$pqrs->subtema = $_POST['RadicarPQRSForm']['subtema'];
				$pqrs->folios = $_POST['RadicarPQRSForm']['folios'];
				$pqrs->anexos = $_POST['RadicarPQRSForm']['anexos'];
				$pqrs->tipoAnexos = $_POST['RadicarPQRSForm']['tipoAnexos'];
				$pqrs->asunto = $_POST['RadicarPQRSForm']['asunto'];

				$pqrs->save();
				
				// crear el historico
				$historico = new Historico;
				$historico->fecha = date('Y/m/d');
				$historico->operacion = 1; // Radicado
				$historico->usuario = 1; // Responsable por defecto siempre 1
				$historico->pqrs = $pqrs->id;
				
				$historico->save();
				
				// mandar el correo
				
				
				// redireccionar a la pagina principal
				$this->actionListaPQRSPendientesDigitalizar();
				return;
			}		
			else {	// falla la validacion
				$model->tipoPQRS = $_POST['RadicarPQRSForm']['tipoPQRS'];
				$model->tipoId = $_POST['RadicarPQRSForm']['tipoId'];
				
				if( $model->tipoId != 'NIT' ) {
					$model->id = $_POST['RadicarPQRSForm']['id'];
					$model->nombres = $_POST['RadicarPQRSForm']['nombres'];
					$model->primerApelldio = $_POST['RadicarPQRSForm']['primerApelldio'];
					$model->segundoApellido = $_POST['RadicarPQRSForm']['segundoApellido'];
					$model->direccion = $_POST['RadicarPQRSForm']['direccion'];
					$model->correo = $_POST['RadicarPQRSForm']['correo'];
					$model->telefono = $_POST['RadicarPQRSForm']['telefono'];
				}
				else {
					$model->nit = $_POST['RadicarPQRSForm']['nit'];
					$model->nombreEmpresa = $_POST['RadicarPQRSForm']['nombreEmpresa'];
					$model->direccionEmpresa = $_POST['RadicarPQRSForm']['direccionEmpresa'];
					$model->telefonoEmpresa = $_POST['RadicarPQRSForm']['telefonoEmpresa'];
					$model->correoEmpresa = $_POST['RadicarPQRSForm']['correoEmpresa'];
					$model->nombreContacto = $_POST['RadicarPQRSForm']['nombreContacto'];
					$model->primerApellidoContacto = $_POST['RadicarPQRSForm']['primerApellidoContacto'];
					$model->segundoApellidoContacto = $_POST['RadicarPQRSForm']['segundoApellidoContacto'];
					$model->telefonoContacto = $_POST['RadicarPQRSForm']['telefonoContacto'];
				}				
				
				$model->pais = $_POST['RadicarPQRSForm']['pais'];
				$model->departamento = $_POST['RadicarPQRSForm']['departamento'];
				$model->ciudad = $_POST['RadicarPQRSForm']['ciudad'];
				$model->dependencia = $_POST['RadicarPQRSForm']['dependencia'];
				$model->modoRecepcion = $_POST['RadicarPQRSForm']['modoRecepcion'];
				
				if( isset( $_POST['RadicarPQRSForm']['tema'] ) )
					$model->tema = $_POST['RadicarPQRSForm']['tema'];
				
				if( isset( $_POST['RadicarPQRSForm']['subtema'] ) )
					$model->subtema = $_POST['RadicarPQRSForm']['subtema'];
				
				if( isset( $_POST['RadicarPQRSForm']['folios'] ) )
					$model->folios = $_POST['RadicarPQRSForm']['folios'];
				
				if( isset( $_POST['RadicarPQRSForm']['anexos'] ) )
					$model->anexos = $_POST['RadicarPQRSForm']['anexos'];
				
				if( isset( $_POST['RadicarPQRSForm']['tipoAnexos'] ) )
					$model->tipoAnexos = $_POST['RadicarPQRSForm']['tipoAnexos'];
				
				if( isset( $_POST['RadicarPQRSForm']['asunto'] ) )
					$model->asunto = $_POST['RadicarPQRSForm']['asunto'];
				
				// temas
				$result = Tema::model()->findAll();
				$temas = array();
				
				foreach( $result as $tema ) {
					$temas[$tema->id] = $tema->nombre;
				}
				
				// subtemas	
				$subtemas;	
				if( isset( $_POST['RadicarPQRSForm']['tema'] ) ) {
					$result = Subtema::model()->findAll('tema='.$model->tema);
					$subtemas = array();				
					
					foreach( $result as $subtema ) {
						$subtemas[$subtema->id] = $subtema->nombre;
					}
				}
				
				// llamar la vista
				$this->render('RadicarPQRS',array('model'=>$model,'temas'=>$temas,'subtemas'=>$subtemas));
				return;
			}	
		}
		
		// primera vez que se muestra la pagina
		$tipo = $_POST['tipo'];
		$id = $_POST['id'];		
		
		$model->tipoPQRS = 'Fisico';
		
		if( $tipo == 'Ciudadano' ) {
			$ciudadano = Ciudadanos::model()->find('id='.$id);
			
			$model->tipoId = $ciudadano->tipoId;
			$model->id = $ciudadano->id;
			$model->nombres = $ciudadano->nombres;
			$model->primerApelldio = $ciudadano->primerApelldio;
			$model->segundoApellido = $ciudadano->segundoApellido;
			$model->direccion = $ciudadano->direccion;
			$model->telefono = $ciudadano->telefono;
			$model->correo = $ciudadano->correo;
			$model->ciudad = $ciudadano->ciudad;
		}
		else {
			$empresa = Empresas::model()->find('nit='.$id);
			
			$model->tipoId = 'NIT';
			$model->nit = $empresa->nit;
			$model->nombreEmpresa = $empresa->nombre;
			$model->direccionEmpresa = $empresa->direccion;
			$model->telefonoEmpresa = $empresa->telefono;
			$model->correoEmpresa = $empresa->correo;
			$model->ciudad = $empresa->ciudad;
			$model->nombreContacto = $empresa->nombreContacto;
			$model->primerApellidoContacto = $empresa->primerApellidoContacto;
			$model->segundoApellidoContacto = $empresa->segundoApellidoContacto;
			$model->telefonoContacto = $empresa->telefonoContacto;
		}
		
		$ciudad = Ciudades::model()->find('id='.$model->ciudad);
		$departamento = Departamentos::model()->find('id='.$ciudad->departamento);
		$pais = Paises::model()->find('id='.$departamento->pais);
		
		$model->ciudad = $ciudad->nombre;
		$model->departamento = $departamento->nombre;
		$model->pais = $pais->nombre;
		$model->dependencia = 'GAC';
		$model->modoRecepcion = 'Ventanilla';

		// temas
		$result = Tema::model()->findAll();
		$temas = array();
		
		foreach( $result as $tema ) {
			$temas[$tema->id] = $tema->nombre;
		}
		
		// subtemas
		$subtemas = array();
		
		// llamar la vista
		$this->render('RadicarPQRS',array('model'=>$model,'temas'=>$temas,'subtemas'=>$subtemas));
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