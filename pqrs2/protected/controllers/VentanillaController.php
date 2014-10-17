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
		$this->render('BusquedaSeleccionContactos');
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