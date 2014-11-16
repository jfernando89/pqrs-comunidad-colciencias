<?php

class PlantillaForm extends CFormModel {
	
	public $nombre;
	public $texto;
	
	public function rules()
	{
		return [
				[['nombre','texto'], 'required'],
		];
	}
	
}