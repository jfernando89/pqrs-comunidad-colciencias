<?php

class VentanillaController extends Controller
{
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