<?php

class EmpresasTest extends CDbTestCase {
	
	public $fixtures=array(
		'empresasFixture'=>'Empresas'
	);
	
	public function testSearch() {
		// busca la empresa por su nombre
		$empresaBusqueda = new Empresas;
		$empresaBusqueda->nombre = 'El Ocaso';
		$empresas = $empresaBusqueda->search();
		$encontradas = $empresas->getData();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $encontradas ), 1 );
	}
	
	public function testGetWholeName() {
		$empresas = $this->empresasFixture;
		$empresa1 = $empresas['empresa1'];
	
		$empresaBuscar = new Empresas;
		$empresaBuscar->nit = $empresa1['nit'];
		$empresaEncontrada = $empresaBuscar->search();
		$encontradas = $empresaEncontrada->getData();
	
		$wholeName = $encontradas[0]->wholeName;
	
		$this->assertEquals( $wholeName, $empresa1['nombre'] );
	}
	
	public function testGetId() {
		$empresas = $this->empresasFixture;
		$empresa1 = $empresas['empresa1'];
	
		$empresaBuscar = new Empresas;
		$empresaBuscar->nit = $empresa1['nit'];
		$empresaEncontrada = $empresaBuscar->search();
		$encontradas = $empresaEncontrada->getData();
	
		$id = $encontradas[0]->id;
	
		$this->assertEquals( $id, $empresa1['nit'] );
	}
	
}

?>