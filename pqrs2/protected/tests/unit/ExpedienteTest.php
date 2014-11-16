<?php

class ExpedienteTest extends CDbTestCase {
	
	public $fixtures=array(
		'expedienteFixture'=>'Expediente'
	);
	
	public function testSearch() {
		// busca el expediente por su nombre
		$expedienteBusqueda = new Expediente;
		$expedienteBusqueda->responsable = 1;
		$expedientes = $expedienteBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $expedientes ), 2 );
	}
	
	public function testSave() {
		// validar que no existe el expediente a guardar
		$expedienteBuscar = new Expediente;
		$expedienteBuscar->responsable = 1;
		$this->assertEquals( count( $expedienteBuscar->search()->getData() ), 2 );
	
		// guarda el expediente
		$expediente = new Expediente;
		$expediente->nombre = 'Expediente 3';
		$expediente->responsable = 1;
		$expediente->asunto = 'Nuevo Asunto';
		$expediente->serie = '333';
		$expediente->subserie = '444';
		$expediente->save();
	
		$this->assertEquals( count( $expedienteBuscar->search()->getData() ), 3 );
	}
	
}

?>