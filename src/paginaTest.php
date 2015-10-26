<?php
	
	class Documento {
		var $num_paginas;
		var $nombre_documento;
		var $fecha_impresion;
		var $paginasTotales;

		public function __construct(){
			$this->num_paginas=0;
			$this->nombre_documento="Inicio";
			$this->fecha_impresion="01-01-2015";
			$this->paginasTotales=0;
		}

		public function borrar(){
			$this->num_paginas=null;
			$this->nombre_documento=null;
			$this->fecha_impresion=null;
		}

		public function nuevaImpresion($numPaginas, $nombreDocumento, $fecha){
			$this->num_paginas = $numPaginas;
			$this->nombre_documento = $nombreDocumento;
			$this->fecha_impresion = $fecha;
		}

		public function paginasImpresas(){
			return $this->paginasTotales;
		}

		public function setNumPaginas($paginas){
			$this->num_paginas=$paginas;
		}

		public function setNomDocumento($documento){
			$this->nombre_documento = $documento;
		}

		public function setFechaImpresion($fecha){
			$this->fecha_impresion = $fecha;
		}

	}

	class DocumentoTest extends PHPUnit_Framework_TestCase {
		public function testSetAndGetURL(){
			$documento1 = new Documento();
			$documento1->nuevaImpresion(1,"Texto prueba.pdf","2-2-2015");
		}

		public function testSetAndGetCallType(){
			$documento2 = new Documento();
			$documento2->setNomDocumento("Documento.pdf");
			$documento2->setNumPaginas(2);
			$documento2->setFechaImpresion(2-2-2015);
			$paginasTotalesImpresas = $documento2->paginasImpresas();
		}
	}

?>