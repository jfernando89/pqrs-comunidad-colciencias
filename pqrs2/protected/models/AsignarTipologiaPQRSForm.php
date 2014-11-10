<?php

class AsignarTipologiaPQRSForm extends CFormModel {
	
	// general
	public $pqrs;
	public $tipoPQRS;
	public $id;
	public $dependencia;
	public $modoRecepcion;
	public $temaCiudadano;
	public $tema;
	public $subtema;
	public $asunto;
	
	public function rules()
	{
		return [
				[['subtema'], 'required'],
				[['pqrs'], 'safe'],
		];
	}
	
}

?>