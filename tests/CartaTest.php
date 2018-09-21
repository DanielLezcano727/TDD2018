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

}