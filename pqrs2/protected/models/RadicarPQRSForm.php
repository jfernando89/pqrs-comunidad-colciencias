<?php

class RadicarPQRSForm extends CFormModel {
	
	// general
	public $tipoPQRS;
	public $tipoId;
	
	// ciudadano
	public $id;
	public $nombres;
	public $primerApelldio;
	public $segundoApellido;
	public $direccion;
	public $telefono;
	public $correo;
	
	// empresa
	public $nit;
	public $nombreEmpresa;
	public $direccionEmpresa;
	public $telefonoEmpresa;
	public $correoEmpresa;
	public $nombreContacto;
	public $primerApellidoContacto;
	public $segundoApellidoContacto;
	public $telefonoContacto;
	
	// general
	public $pais;
	public $departamento;
	public $ciudad;
	public $dependencia;
	public $modoRecepcion;
	public $tema;
	public $subtema;
	public $folios;
	public $anexos;
	public $tipoAnexos;
	public $asunto;
	
	public function rules()
	{
		return [
				[['subtema', 'folios', 'anexos', 'tipoAnexos', 
				  'asunto' ], 'required'],
				array('subtema, folios, anexos', 'numerical', 'integerOnly'=>true),
		];
	}
	
}

?>