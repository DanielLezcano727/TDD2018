<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

public function testPalo(){
$carta = new Carta(12,"Copa");
$this->assertEquals($carta->verPalo(),"Copa");
$carta = new Carta(12,"Basto");
$this->assertEquals($carta->verPalo(),"Basto");
$carta = new Carta(12,"Espada");
$this->assertEquals($carta->verPalo(),"Espada");
$carta = new Carta("As", "Picas");
$this->assertEquals($carta->verPalo(),"Picas");
$carta = new Carta("As", "Hola");
$this->assertEquals($carta->verPalo(),"Copa");
}

public function testNumero(){
$carta = new Carta(1,"");
$this->assertEquals($carta->verNumero(),1);
$carta = new Carta(6,"");
$this->assertEquals($carta->verNumero(),6);
$carta = new Carta(4,"");
$this->assertEquals($carta->verNumero(),4);
$carta = new Carta(2,"");
$this->assertEquals($carta->verNumero(),2);
$carta = new Carta(15,"");
$this->assertEquals($carta->verNumero(),2);
$carta = new Carta(8,"");
$this->assertEquals($carta->verNumero(),8);
$carta = new Carta("As","");
$this->assertEquals($carta->verNumero(),"As");
$carta = new Carta("Hola","");
$this->assertEquals($carta->verNumero(),2);
$carta = new Carta(9,"");
$this->assertEquals($carta->verNumero(),9);
$carta = new Carta("Q","");
$this->assertEquals($carta->verNumero(),"Q");
$carta = new Carta("K","");
$this->assertEquals($carta->verNumero(),"K");
$carta = new Carta("J","");
$this->assertEquals($carta->verNumero(),"J");
$carta = new Carta(-10,"");
$this->assertEquals($carta->verNumero(),2);
}

}