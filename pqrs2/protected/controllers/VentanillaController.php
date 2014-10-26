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
				$this->render('error', $error);
		}
	}
	
	public function actionBusquedaSeleccionContactos()
	{
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

	public function actionCrearContacto()
	{
		$this->render('CrearContacto');
	}

	public function actionListaComprobantesEntrega()
	{
		$this->render('ListaComprobantesEntrega');
	}

	public function actionListaPQRSPendientesArchivar()
	{
		$this->render('ListaPQRSPendientesArchivar');
	}

	public function actionListaPQRSPendientesDigitalizar()
	{
		$this->render('ListaPQRSPendientesDigitalizar');
	}

	public function actionPrincipalVentanilla()
	{
		$this->render('PrincipalVentanilla');
	}

	public function actionRadicarPQRS()
	{
		$this->render('RadicarPQRS');
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