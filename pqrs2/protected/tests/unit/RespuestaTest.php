<?php

class RespuestaTest extends CDbTestCase {
	
	public $fixtures=array(
		'respuestaFixture'=>'Respuesta'
	);
	
	public function testSearch() {
		// busca el respuesta por su nombre
		$respuestaBusqueda = new Respuesta;
		$respuestaBusqueda->id = 1;
		$respuestas = $respuestaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $respuestas ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el respuesta a guardar
		$respuestaBuscar = new Respuesta;
		$respuestaBuscar->id = '2';
		$this->assertEquals( count( $respuestaBuscar->search()->getData() ), 0 );
	
		// guarda el respuesta
		$respuesta = new Respuesta;
		$respuesta->id = '2';
		$respuesta->save();
	
		$this->assertEquals( count( $respuestaBuscar->search()->getData() ), 1 );
	}
	
}

?>