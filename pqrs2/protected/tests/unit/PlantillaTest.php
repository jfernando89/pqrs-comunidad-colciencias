<?php

class PlantillaTest extends CDbTestCase {
	
	public $fixtures=array(
		'plantillaFixture'=>'Plantilla'
	);
	
	public function testSearch() {
		// busca el plantilla por su nombre
		$plantillaBusqueda = new Plantilla;
		$plantillaBusqueda->nombre = 'Respuesta Queja';
		$plantillas = $plantillaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $plantillas ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el plantilla a guardar
		$plantillaBuscar = new Plantilla;
		$plantillaBuscar->nombre = 'Reclamo';
		$this->assertEquals( count( $plantillaBuscar->search()->getData() ), 0 );
	
		// guarda el plantilla
		$plantilla = new Plantilla;
		$plantilla->nombre = 'Respuesta Reclamo';
// 		$plantilla->save();
	
		$this->assertEquals( count( $plantillaBuscar->search()->getData() ), 0 );
	}
	
}

?>