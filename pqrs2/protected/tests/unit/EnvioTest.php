<?php

class EnvioTest extends CDbTestCase {
	
	public $fixtures=array(		
		'medioFixture'=>'Medio',
		'zonaFixture'=>'Zona',
		'tipFixture'=>'TipoEnvio',
		'envioFixture'=>'Envio',
	);
	
	public function testSearch() {
		// busca el envio por su guia
		$envioBusqueda = new Envio;
		$envioBusqueda->guia = '12345XYZ';
		$envios = $envioBusqueda->search();
		
		// valida si el resultado es mayor o igual a uno
		$this->assertGreaterThanOrEqual( count( $envios ), 1 );
	}
	
	public function testSave() {
		// validar que no existe el envio a guardar
		$envioBuscar = new Envio;
		$envioBuscar->guia = '99989XW';
		$this->assertEquals( count( $envioBuscar->search()->getData() ), 0 );
	
		// guarda el envio
		$envio1 = new Envio;
		$envio1->id = 2;
		$envio1->medio = 1;
		$envio1->zona = 1;
		$envio1->tipo = 2;
		$envio1->guia = '99989XW';
// 		$envio1->save();
	
		$this->assertEquals( count( $envioBuscar->search()->getData() ), 0 );
	}
	
}

?>