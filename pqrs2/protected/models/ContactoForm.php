<?php

class ContactoForm extends CFormModel {
	
	public $tipoId;
	public $id;
	public $nombre;
	public $primerApellido;
	public $tipoContacto;
	public $pais;
	public $departamento;
	
	public function rules()
	{
		return [
				[['tipoId'], 'required'],
		];
	}
}