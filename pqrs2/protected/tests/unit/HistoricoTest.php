<?php

class HistoricoTest extends CDbTestCase {
	
	public $fixtures=array(
		'historicoFixture'=>'Historico'
	);
	
	public function testSearch() {
		// busca el historico por su primerApellido
		$historicoBusqueda = new Historico;
		$historicoBusqueda->id = 1;
		$historicos = $historicoBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $historicos ), 1 );
	}
	
	public function testSave() {
		// validar que no existe la empresa a guardar
		$historicoBuscar = new Historico;
		$historicoBuscar->id = 2;
		$this->assertEquals( count( $historicoBuscar->search()->getData() ), 0 );
	
		// guarda la empresa
		$historico = new Historico;
		$historico->id = 2;
		$historico->fecha = '2014/10/11';
		$historico->operacion = 1;
		$historico->usuario = '999';
		$historico->observacion = 'Observacion adicional';
		$historico->pqrs = 1;
		$historico->save();
	
		$this->assertEquals( count( $historicoBuscar->search()->getData() ), 1 );
	}
	
}

?>