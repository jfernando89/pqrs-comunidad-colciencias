<?php

class OperacionTest extends CDbTestCase {
	
	public $fixtures=array(
		'operacionFixture'=>'Operacion'
	);
	
	public function testSearch() {
		// busca el operacion por su nombre
		$operacionBusqueda = new Operacion;
		$operacionBusqueda->nombre = 'Radicado';
		$operacions = $operacionBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $operacions ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el operacion a guardar
		$operacionBuscar = new Operacion;
		$operacionBuscar->nombre = 'Actualizado';
		$this->assertEquals( count( $operacionBuscar->search()->getData() ), 0 );
	
		// guarda el operacion
		$operacion = new Operacion;
		$operacion->nombre = 'Actualizado';
		$operacion->save();
	
		$this->assertEquals( count( $operacionBuscar->search()->getData() ), 1 );
	}
	
}

?>