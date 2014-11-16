<?php

class MedioTest extends CDbTestCase {
	
	public $fixtures=array(
		'medioFixture'=>'Medio'
	);
	
	public function testSearch() {
		// busca el medio por su nombre
		$medioBusqueda = new Medio;
		$medioBusqueda->nombre = 'Avion';
		$medios = $medioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $medios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el medio a guardar
		$medioBuscar = new Medio;
		$medioBuscar->nombre = 'Caballo';
		$this->assertEquals( count( $medioBuscar->search()->getData() ), 0 );
	
		// guarda el medio
		$medio = new Medio;
		$medio->nombre = 'Caballo';
		$medio->save();
	
		$this->assertEquals( count( $medioBuscar->search()->getData() ), 1 );
	}
	
}

?>