<?php

namespace TDD;

class Carta {

  protected $numero;
  protected $palo;

  /**
   * Constructor: Contruye una carta
   *
   * @param int $numero
   * @param string $numero
   * @param string $palo
   */
  public function __construct($numero, $palo) {

    if($this->paloValidoEspanolas($palo) || $this->paloValidoPoker($palo)){
      $this->palo = $palo;
    }
    else{
      $this->palo = "Copa";
    }

    if ($numero <= 12 && $numero > 0 || $this->numeroValido($numero)) {
      $this->numero = $numero;
    }
    else {
      $this->numero = 2;
    }
  }
  
  public function paloValidoEspanolas($palo){
    switch(strtolower($palo)){
      case "copa":
      case "basto":
      case "espada":
      case "oro":
        return TRUE;
    }
    return FALSE;
  }

  public function paloValidoPoker($palo){
    switch (strtolower($palo)) {
      case "picas":
      case "corazones":
      case "diamantes":
      case "treboles":
        return TRUE;
    }
  }

  public function numeroValido($numero){
    switch (strtolower($numero)) {
      case "as":
      case "k":
      case "q":
      case "j":
        return TRUE;
    }
    return FALSE;
  }

  /**
   * verPalo: Devuelve el palo de la carta
   *
   * @return string
   */
  public function verPalo() {
    return $this->palo;
  }

  /**
   * verNumero: Devuelve el valor de la carta.
   *
   * @ return int or string
   */
  public function verNumero() {
    return $this->numero;
  }

  /**
   * leer: Devuelve la carta como un string
   *
   * @return string
   */
  public function leer() {
    return $this->verNumero() . " de " . $this->verPalo();
  }

}