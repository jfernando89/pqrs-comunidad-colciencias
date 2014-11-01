<?php

class CiudadesTest extends CDbTestCase {
	
	public function testSearch() {
		// busca ciudades con esa palabra a traves del metodo a probar
		$ciudadBusqueda = new Ciudades;
		$ciudadBusqueda->nombre = 'men';	// Armenia
		$ciudades = $ciudadBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $ciudades ), 1 );
	}
	
}

?>