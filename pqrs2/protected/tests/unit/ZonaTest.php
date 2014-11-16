<?php

class ZonaTest extends CDbTestCase {
	
	public $fixtures=array(
		'zonaFixture'=>'Zona'
	);
	
	public function testSearch() {
		// busca el zona por su nombre
		$zonaBusqueda = new Zona;
		$zonaBusqueda->nombre = 'Zona 1';
		$zonas = $zonaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $zonas ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el zona a guardar
		$zonaBuscar = new Zona;
		$zonaBuscar->nombre = 'Zona 9';
		$this->assertEquals( count( $zonaBuscar->search()->getData() ), 0 );
	
		// guarda el zona
		$zona = new Zona;
		$zona->nombre = 'Zona 9';
		$zona->save();
	
		$this->assertEquals( count( $zonaBuscar->search()->getData() ), 1 );
	}
	
}

?>