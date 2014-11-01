<?php

class DepartamentosTest extends CDbTestCase {
	
	public function testSearch() {
		// busca departamentos a traves del metodo a probar
		$departamentoBusqueda = new Departamentos;
		$departamentoBusqueda->nombre = 'Cundi';	// Cundinamarca
		$departamentos = $departamentoBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $departamentos ), 1 );
	}
	
}

?>