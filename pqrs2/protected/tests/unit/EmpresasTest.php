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
	
	public function testSave() {
		// validar que no existe la empresa a guardar
		$empresaBuscar = new Empresas;
		$empresaBuscar->nit = '98765';
		$this->assertEquals( count( $empresaBuscar->search()->getData() ), 0 );
		
		// guarda la empresa
		$empresa = new Empresas;
		$empresa->nit = '98765';
		$empresa->nombre = 'Uniquindio';
		$empresa->direccion = 'Cra 14';
		$empresa->ciudad = 11;
		$empresa->nombreContacto = 'Nombre Rector';
		$empresa->primerApellidoContacto = 'Primer Apellido Rector';
		$empresa->segundoApellidoContacto = 'Segundo Apellido Rector';
		$empresa->telefonoContacto = '7445656';
		$empresa->save();
		
		$this->assertEquals( count( $empresaBuscar->search()->getData() ), 1 );
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