<?php

class SubtemaTest extends CDbTestCase {
	
	public $fixtures=array(
		'subtemaFixture'=>'Subtema'
	);
	
	public function testSearch() {
		// busca el subtema por su nombre
		$subtemaBusqueda = new Subtema;
		$subtemaBusqueda->nombre = 'Queja Investigador';
		$subtemas = $subtemaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $subtemas ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el subtema a guardar
		$subtemaBuscar = new Subtema;
		$subtemaBuscar->nombre = 'Prueba';
		$this->assertEquals( count( $subtemaBuscar->search()->getData() ), 0 );
	
		// guarda el subtema
		$subtema = new Subtema;
		$subtema->nombre = 'Prueba';
		$subtema->tema = 1;
		$subtema->save();
	
		$this->assertEquals( count( $subtemaBuscar->search()->getData() ), 1 );
	}
	
}

?>