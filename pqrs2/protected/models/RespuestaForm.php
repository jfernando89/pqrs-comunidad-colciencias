<?php

class RespuestaForm extends CFormModel {
	
	// general
	public $pqrs;
	public $tipoPQRS;
	public $expediente;
	public $asunto;
	public $serie;
	public $subserie;
	public $dependencia;
	public $modoRecepcion;
	public $subtema;
	public $plantilla;
	public $texto;
	
	public function rules()
	{
		return [
				[['pqrs','tipoPQRS','expediente','asunto','serie','subserie','dependencia','modoRecepcion','subtema','plantilla','texto','subtema'], 'required'],
				[['pqrs'], 'safe'],
		];
	}
	
}

?>