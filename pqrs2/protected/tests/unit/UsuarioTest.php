<?php

class UsuarioTest extends CDbTestCase {
	
	public $fixtures=array(
		'usuarioFixture'=>'Usuario'
	);
	
	public function testSearch() {
		// busca el usuario por su nombre
		$usuarioBusqueda = new Usuario;
		$usuarioBusqueda->nombre = 'Responsable';
		$usuarios = $usuarioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $usuarios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el usuario a guardar
		$usuarioBuscar = new Usuario;
		$usuarioBuscar->id = '3';
		$this->assertEquals( count( $usuarioBuscar->search()->getData() ), 0 );
	
		// guarda el usuario
		$usuario = new Usuario;
		$usuario->id = '3';
		$usuario->nombre = 'Sujeto de Prueba';
		$usuario->apellidos = 'Apellido';
		$usuario->correo = 'example@gmail.com';
		$usuario->tipo = 1;
		$usuario->save();
	
		$this->assertEquals( count( $usuarioBuscar->search()->getData() ), 1 );
	}
	
}

?>