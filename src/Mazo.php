<?php

namespace TDD;

class Mazo {
	protected $cartas;
	protected $cant;
	
	public function __construct(){
		$this->cartas = array();
		$this->cant = 0;
	}

	public function mezclar() {
		return TRUE;
  	}

	public function tieneCartas(){
		return $this->cant != 0;
	}

	public function agregar($carta){
		$this->cartas[] = $carta;
		$this->cant++;
		return TRUE;
	}

}
