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
  
  /**
   * paloValidoEspanolas: Devuelve true si el palo es un palo de las cartas españolas y false
   *   en caso contrario
   * 
   * @param string $palo
   *    Palo de la carta que se quiere crear
   * 
   * @return bool
   */
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

  /**
   * paloValidoPoker: Devuelve true si el palo es un palo de las cartas de poker y false
   *   en caso contrario
   * 
   * @param string $palo
   *    Palo de la carta que se quiere crear
   * 
   * @return bool
   */
  public function paloValidoPoker($palo){
    switch (strtolower($palo)) {
      case "picas":
      case "corazones":
      case "diamantes":
      case "treboles":
        return TRUE;
    }
  }

  /**
   * numeroValido: Devuelve true si el numero pertenece a las cartasd de poker y false
   *   en caso contrario
   * 
   * @param string $numero
   *    Numero de la carta que se quiere crear
   * 
   * @return bool
   */
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