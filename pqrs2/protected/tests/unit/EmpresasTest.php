<?php

class EmpresasTest extends CDbTestCase {
	
	public $fixtures=array(
			'empresasFixture'=>'Empresas'
	);
	
	public function testSearch() {
		// busca la empresa por su nombre
		$empresa = new Empresas;
		$empresaBusqueda->nombre = 'El Ocaso';
		$empresas = $empresaBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $empresas ), 1 );
	}
	
	public function testGetWholeName() {
		$empresas = $this->empresasFixture;
		$empresa1 = $empresas['empresa1'];
	
		$empresaBuscar = new Empresas;
		$empresaBuscar->id = $empresa1->id;
		$empresaEncontrada = $empresaBuscar->search();
	
		$wholeName = $empresaEncontrada->wholeName;
	
		$this->assertEquals( $wholeName, $empresa1->nombre );
	}
	
	public function testGetId() {
		$empresas = $this->empresasFixture;
		$empresa1 = $empresas['empresa1'];
	
		$empresaBuscar = new Empresas;
		$empresaBuscar->nit = $empresa1->nit;
		$empresaEncontrada = $empresaBuscar->search();
	
		$id = $empresaEncontrada->id;
	
		$this->assertEquals( $id, $empresa1->nit );
	}
	
}

?>