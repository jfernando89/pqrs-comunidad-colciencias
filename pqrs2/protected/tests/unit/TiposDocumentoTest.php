<?php

class TiposDocumentoTest extends CDbTestCase {
	
	public function testSearch() {
		// busca tipos de documento con esa palabra a traves del metodo a probar
		$tiposBusqueda = new TiposDocumento;
		$tiposBusqueda->nombre = 'Cedula';
		$tipos = $tiposBusqueda->search();
		
		// valida si el resultado es mayor o igual a dos
		$this->assertGreaterThanOrEqual( count( $tipos ), 2 );
	}
	
}

?>