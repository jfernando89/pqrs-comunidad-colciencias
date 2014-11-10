<?php

class DependenciaTest extends CDbTestCase {
	
	public $fixtures=array(
		'dependenciaFixture'=>'Dependencia'
	);
	
	public function testSearch() {
		// busca el dependencia por su nombre
		$dependenciaBusqueda = new Dependencia;
		$dependenciaBusqueda->expediente = 1;
		$dependencias = $dependenciaBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $dependencias ), 2 );
	}
	
	public function testSave() {
		// validar que no existe el dependencia a guardar
		$dependenciaBuscar = new Dependencia;
		$dependenciaBuscar->expediente = 1;
		$this->assertEquals( count( $dependenciaBuscar->search()->getData() ), 2 );
	
		// guarda el dependencia
		$dependencia = new Dependencia;
		$dependencia->nombre = 'GAC Externo';
		$dependencia->expediente = 1;
		$dependencia->save();
	
		$this->assertEquals( count( $dependenciaBuscar->search()->getData() ), 3 );
	}
	
}

?>