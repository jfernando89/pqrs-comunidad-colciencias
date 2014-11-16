<?php

class ExpedienteForm extends CFormModel {
	
	public $pqrs;
	public $dependencia;
	public $usuario;
	public $expediente;
	public $asunto;
	public $serie;
	public $subserie;
	
	public function rules()
	{
		return [
				[['dependencia','usuario'], 'required'],
		];
	}
	
}