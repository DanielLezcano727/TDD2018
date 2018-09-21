<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo("poker");
        $this->assertTrue(isset($mazo));
    }

	public function testEsVacio() {
		$mazo = new Mazo();
		$this->assertFalse($mazo->tieneCartas());
	}

	public function testAgregar() {
		$mazo = new Mazo();
		$this->assertTrue($mazo->agregar(2, "Copa"));
		$this->assertTrue($mazo->agregar(3, "Basto"));
		$this->assertTrue($mazo->agregar(8, "Espada"));
		$this->assertTrue($mazo->agregar(7, "Oro"));
		$this->assertFalse($mazo->agregar(9, "Picas"));
		$this->assertFalse($mazo->agregar(1, "Corazones"));
	}

	public function testCantidad() {
		$mazo = new Mazo("poker");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$this->assertEquals($mazo->obtenerCantidad(),8);
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$mazo->agregar(2, "Copa");
		$this->assertEquals($mazo->obtenerCantidad(),11);
		
	}

	public function testObtenerCarta(){
		$mazo = new Mazo();
		$this->assertNull($mazo->obtenerCarta());
		$mazo->agregar(2, "Copa");
		$mazo->agregar(4, "Basto");
		$mazo->agregar(6, "Espada");
		$mazo->agregar(3, "Oro");
		$mazo->agregar(5, "Oro");
		$mazo->agregar(12, "Espada");
		$this->assertEquals($mazo->obtenerCarta(),"2 de Copa");
		$this->assertEquals($mazo->obtenerCarta(),"4 de Basto");
		$this->assertEquals($mazo->obtenerCarta(),"6 de Espada");
		$this->assertEquals($mazo->obtenerCarta(),"3 de Oro");
		$this->assertEquals($mazo->obtenerCarta(),"5 de Oro");
		$this->assertEquals($mazo->obtenerCarta(),"12 de Espada");
		$this->assertNull($mazo->obtenerCarta());
		$mazo = new Mazo("poker");
		$mazo->agregar("As", "Picas");
		$mazo->agregar(4, "Treboles");
		$mazo->agregar("K", "Corazones");
		$mazo->agregar("Q", "Diamantes");
		$this->assertEquals($mazo->obtenerCarta(),"As de Picas");
		$this->assertEquals($mazo->obtenerCarta(),"4 de Treboles");
		$this->assertEquals($mazo->obtenerCarta(),"K de Corazones");
		$this->assertEquals($mazo->obtenerCarta(),"Q de Diamantes");
		
	}

	public function testCortar(){
		$mazo = new Mazo();
		foreach(array(1,2,3,4,5,6,7,8,9) as $x){
			$mazo->agregar($x, "Espada");
		}
		$mazo->cortar(5);
		foreach(array(6,7,8,9,1,2,3,4,5) as $x){
			$this->assertEquals($mazo->obtenerCarta()->verNumero(),$x);
		}
	}

	public function testMezclar(){
		$mazo = new Mazo();
		foreach(array(1,2,3,4,5,6,7,8,9) as $x){
			$mazo->agregar($x, "Espada");
		}
		$this->assertTrue($mazo->mezclar());
		$auxBool = true;
		foreach(array(1,2,3,4,5,6,7,8,9) as $x){
			if($x != $mazo->obtenerCarta()->verNumero()){
				$auxBool = false;
			}
		}
		$this->assertFalse($auxBool);
	}

}
