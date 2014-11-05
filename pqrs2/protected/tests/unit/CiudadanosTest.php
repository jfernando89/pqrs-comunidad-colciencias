<?php

class CiudadanosTest extends CDbTestCase {
	
	public $fixtures=array(
		'ciudadanosFixture'=>'Ciudadanos'
	);
	
	public function testSearch() {
		// busca el ciudadano por su primerApellido
		$ciudadanoBusqueda = new Ciudadanos;
		$ciudadanoBusqueda->primerApelldio = 'Quiceno';
		$ciudadanos = $ciudadanoBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $ciudadanos ), 1 );
	}
	
	public function testSave() {
		// validar que no existe la empresa a guardar
		$ciudadanoBuscar = new Ciudadanos;
		$ciudadanoBuscar->id = '56789';
		$this->assertEquals( count( $ciudadanoBuscar->search()->getData() ), 0 );
	
		// guarda la empresa
		$ciudadano = new Ciudadanos;
		$ciudadano->id = '56789';
		$ciudadano->tipoId = 3;
		$ciudadano->nombres = 'Sujeto de Prueba';
		$ciudadano->primerApelldio = 'Apellido';
		$ciudadano->correo = 'example@gmail.com';
		$ciudadano->ciudad = 11;
		$ciudadano->save();
	
		$this->assertEquals( count( $ciudadanoBuscar->search()->getData() ), 1 );
	}
	
	public function testGetWholeName() {
		$ciudadanos = $this->ciudadanosFixture;
		$ciudadano1 = $ciudadanos['ciudadano1'];
		
		$ciudadanoBuscar = new Ciudadanos;
		$ciudadanoBuscar->id = $ciudadano1['id'];
		$ciudadanoEncontrado = $ciudadanoBuscar->search();
		$encontrados = $ciudadanoEncontrado->getData();
		
		$wholeName = $encontrados[0]->wholeName;
		
		$this->assertEquals( $wholeName, $ciudadano1['nombres'] . ' ' . $ciudadano1['primerApelldio'] . ' ' . $ciudadano1['segundoApellido'] );
	}
	
	public function testGetId() {
		$ciudadanos = $this->ciudadanosFixture;
		$ciudadano1 = $ciudadanos['ciudadano1'];
	
		$ciudadanoBuscar = new Ciudadanos;
		$ciudadanoBuscar->id = $ciudadano1['id'];
		$ciudadanoEncontrado = $ciudadanoBuscar->search();
		$encontrados = $ciudadanoEncontrado->getData();
		
		$id = $encontrados[0]->id;
	
		$this->assertEquals( $id, $ciudadano1['id'] );
	}
	
}

?>