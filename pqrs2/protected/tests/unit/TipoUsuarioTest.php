<?php

class TipoUsuarioTest extends CDbTestCase {
	
	public $fixtures=array(
		'tipoFixture'=>'TipoUsuario'
	);
	
	public function testSearch() {
		// busca el tipoUsuario por su nombre
		$tipoUsuarioBusqueda = new TipoUsuario;
		$tipoUsuarioBusqueda->nombre = 'GAC';
		$tipoUsuarios = $tipoUsuarioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $tipoUsuarios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el tipoUsuario a guardar
		$tipoUsuarioBuscar = new TipoUsuario;
		$tipoUsuarioBuscar->nombre = 'Prueba';
		$this->assertEquals( count( $tipoUsuarioBuscar->search()->getData() ), 0 );
	
		// guarda el tipoUsuario
		$tipoUsuario = new TipoUsuario;
		$tipoUsuario->nombre = 'Prueba';
		$tipoUsuario->save();
	
		$this->assertEquals( count( $tipoUsuarioBuscar->search()->getData() ), 1 );
	}
	
}

?>