<?php

class TemaTest extends CDbTestCase {
	
	public $fixtures=array(
		'temaFixture'=>'Tema'
	);
	
	public function testSearch() {
		// busca el tema por su nombre
		$temaBusqueda = new Tema;
		$temaBusqueda->nombre = 'Queja';
		$temas = $temaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $temas ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el tema a guardar
		$temaBuscar = new Tema;
		$temaBuscar->nombre = 'Prueba';
		$this->assertEquals( count( $temaBuscar->search()->getData() ), 0 );
	
		// guarda el tema
		$tema = new Tema;
		$tema->nombre = 'Prueba';
		$tema->responsable = 1;
		$tema->save();
	
		$this->assertEquals( count( $temaBuscar->search()->getData() ), 1 );
	}
	
}

?>