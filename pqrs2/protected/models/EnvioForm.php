<?php

class EnvioForm extends CFormModel {
	
	// general
	public $pqrs;
	public $respuesta;
	public $medio;
	public $zona;
	public $tipo;
	public $guia;
	
	public function rules()
	{
		return [
				[['pqrs','respuesta','medio','zona','tipo','guia'], 'required'],
				[['pqrs'], 'safe'],
		];
	}
	
}

?>