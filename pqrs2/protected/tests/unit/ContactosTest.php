<?php

class ContactosTest extends CDbTestCase {
	
	public function testSearch() {
		// busca el contacto basado en el id
		$contacto = new Contacto;
		$contacto->id = '1113304996';
		$contactoEncontrado = $contacto->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertNotNull( $contactoEncontrado );
	}
	
}

?>