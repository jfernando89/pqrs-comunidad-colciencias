<?php

class PQRSTest extends CDbTestCase {
	
	public $fixtures=array(
		'pqrsFixture'=>'PQRS'
	);
	
	public function testSearch() {
		// busca el pqrs por su primerApellido
		$pqrsBusqueda = new Pqrs;
		$pqrsBusqueda->subtema = 1;
		$pqrss = $pqrsBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $pqrss ), 1 );
	}
	
	public function testSave() {
		// validar que no existe la empresa a guardar
		$pqrsBuscar = new Pqrs;
		$pqrsBuscar->id = '9';
		$this->assertEquals( count( $pqrsBuscar->search()->getData() ), 0 );
	
		// guarda la empresa
		$pqrs = new Pqrs;
		$pqrs->id = '9';
		$pqrs->contacto = '999';
		$pqrs->dependencia = 1;
		$pqrs->subtema = 1;
		$pqrs->folios = 1;
		$pqrs->anexos = 1;
		$pqrs->tipoAnexos = 'Word y Excel';
		$pqrs->asunto = 'Urgente';
		$pqrs->save();
	
		$this->assertEquals( count( $pqrsBuscar->search()->getData() ), 1 );
	}
	
}

?>