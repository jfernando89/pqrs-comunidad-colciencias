<?php

class ContactoForm extends CFormModel {
	
	public $tipoId;
	public $id;
	public $nombre;
	public $primerApellido;
	
	public function rules()
	{
		return [
				[['tipoId'], 'required'],
		];
	}
}