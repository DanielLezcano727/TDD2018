<?php

namespace TDD;

class Mazo {
  protected $cartas;
  protected $cant;
  protected $poker;

  public function __construct($tipo = "españolas") {
    $this->cartas = array();
    $this->cant = 0;
    if ($tipo == "españolas") {
      $this->poker = false;
    }
    else {
      $this->poker = true;
    }
  }

  /**
   * mezclar: Mezcla el array cartas perteneciente a la clase
   *
   * @return bool
   *
   */
  public function mezclar() {
    shuffle($this->cartas);
    return TRUE;
  }

  /**
   * tieneCartas: Devuelve true si el array cartas tiene algun elemento dentro.
   *
   * @return bool
   *
   */
  public function tieneCartas() {
    return $this->cant != 0;
  }

  /**
   * agregar: Agrega una carta al array cartas perteneciente a la clase
   *
   * @param int $numero
   * @param string $numero
   * @param string $palo
   *
   * @return bool
   */
  public function agregar($numero, $palo) {
    $carta = new Carta($numero, $palo);
    array_unshift($this->cartas, $carta);
    $this->cant++;
    return TRUE;
  }

  /**
   * obtenerCantidad: Devuelve la cantidad de cartas que tiene el mazo
   *
   * @return int
   */
  public function obtenerCantidad() {
    return $this->cant;
  }

  /**
   * obtenerCarta: Devuelve la primera carta que se agrego al mazo
   *
   * @return Carta
   */

  public function obtenerCarta() {
    return array_pop($this->cartas);
  }

  /**
   * cortar: Toma una cantidad determinada de cartas del mazo, las quita y las agrega al inicio del array
   *
   * @param int
   *
   * @return void
   */

  public function cortar($cant) {
    for ($i = 0; $i < $cant; $i++) {
      $aux = $this->obtenerCarta();
      $this->agregar($aux->verNumero(), $aux->verPalo());
    }
  }
}
