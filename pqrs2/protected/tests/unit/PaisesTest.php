<?php

class PaisesTest extends CDbTestCase {
	
	public function testSearch() {
		// busca paises con esa palabra a traves del metodo a probar
		$paisBusqueda = new Paises;
		$paisBusqueda->nombre = 'Col';	// Colombia
		$paises = $paisBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $paises ), 1 );
	}
	
}

?>