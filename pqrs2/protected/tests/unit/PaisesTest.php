<?php

Yii::import('application.models.Paises');

class PaisesTest extends CDbTestCase {
	
	public function testSearch() {
		// crea dos paises que incluyan la misma palabra
		$pais1 = new Paises;
		$pais1->nombre = 'Puerto Rico';
		$pais1->save();
		
		$pais2 = new Paises;
		$pais2->nombre = 'Puerto Grande';
		$pais2->save();
		
		// busca paises con esa palabra a traves del metodo a probar
		$paisBusqueda = new Paises;
		$paisBusqueda->nombre = 'Puerto';
		$paises = $paisBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $paises ), 2 );
	}
	
}

?>