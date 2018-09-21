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
		shuffle($this->cartas);
		return true;
  	}

	public function tieneCartas(){
		return $this->cant != 0;
	}

	public function agregar($carta){
		array_unshift($this->cartas, $carta);
		$this->cant++;
		return true;
	}

	public function obtenerCantidad(){
		return $this->cant;
	}

	public function obtenerCarta(){
		return array_pop($this->cartas);
	}

	public function cortar($cant){
		for($i = 0; $i<$cant;$i++){
			$this->agregar($this->obtenerCarta());
		}
	}
}
