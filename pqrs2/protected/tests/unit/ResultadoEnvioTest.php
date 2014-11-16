<?php

class ResultadoEnvioTest extends CDbTestCase {
	
	public $fixtures=array(
		'resultadoEnvioFixture'=>'ResultadoEnvio'
	);
	
	public function testSearch() {
		// busca el resultadoEnvio por su nombre
		$resultadoEnvioBusqueda = new ResultadoEnvio;
		$resultadoEnvioBusqueda->nombre = 'Rechazado';
		$resultadoEnvios = $resultadoEnvioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $resultadoEnvios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el resultadoEnvio a guardar
		$resultadoEnvioBuscar = new ResultadoEnvio;
		$resultadoEnvioBuscar->nombre = 'Perdido';
		$this->assertEquals( count( $resultadoEnvioBuscar->search()->getData() ), 0 );
	
		// guarda el resultadoEnvio
		$resultadoEnvio = new ResultadoEnvio;
		$resultadoEnvio->nombre = 'Perdido';
		$resultadoEnvio->save();
	
		$this->assertEquals( count( $resultadoEnvioBuscar->search()->getData() ), 1 );
	}
	
}

?>