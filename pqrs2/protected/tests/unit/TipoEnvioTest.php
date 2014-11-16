<?php

class TipoEnvioTest extends CDbTestCase {
	
	public $fixtures=array(
		'tipoEnvioFixture'=>'TipoEnvio'
	);
	
	public function testSearch() {
		// busca el tipoEnvio por su nombre
		$tipoEnvioBusqueda = new TipoEnvio;
		$tipoEnvioBusqueda->nombre = 'Local';
		$tipoEnvios = $tipoEnvioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $tipoEnvios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el tipoEnvio a guardar
		$tipoEnvioBuscar = new TipoEnvio;
		$tipoEnvioBuscar->nombre = 'Regional';
		$this->assertEquals( count( $tipoEnvioBuscar->search()->getData() ), 0 );
	
		// guarda el tipoEnvio
		$tipoEnvio = new TipoEnvio;
		$tipoEnvio->nombre = 'Regional';
		$tipoEnvio->save();
	
		$this->assertEquals( count( $tipoEnvioBuscar->search()->getData() ), 1 );
	}
	
}

?>