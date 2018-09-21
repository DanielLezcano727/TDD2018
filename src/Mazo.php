<?php

namespace TDD;

class Mazo {
	protected $cartas;
	protected $cant;
	protected $poker;

	public function __construct($tipo = "españolas"){
		$this->cartas = array();
		$this->cant = 0;
		if($tipo == "españolas"){
			$poker = false;
		}else{
			$poker = true;
		}
	}

	public function mezclar() {
		shuffle($this->cartas);
		return true;
  	}

	public function tieneCartas(){
		return $this->cant != 0;
	}

	public function agregar($numero, $palo){
		if($this->poker){
			if(!(($numero > 1 && $numero <= 10) || $numero == "As" || $numero == "K" || $numero == "Q" || $numero == "J")){
				$numero = "As";
			}
			if(!(strtolower($palo) == "picas" || strtolower($palo) == "diamantes" || strtolower($palo) == "corazones" || strtolower($palo) == "treboles")){
				$palo = "Picas";
			}
		}
		$carta = new Carta($numero, $palo);
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
			$aux = $this->obtenerCarta();
			$this->agregar($aux->verNumero(),$aux->verPalo());
		}
	}
}
