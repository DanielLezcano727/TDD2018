<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }

	public function testEsVacio() {
		$mazo = new Mazo;
		$this->assertFalse($mazo->tieneCartas());
	}

	public function testAgregar() {
		$mazo = new Mazo;
		$this->assertTrue($mazo->agregar(2));
		$this->assertTrue($mazo->agregar(3));
		$this->assertTrue($mazo->agregar(8));
		$this->assertTrue($mazo->agregar(7));
		$this->assertTrue($mazo->agregar(9));
		$this->assertTrue($mazo->agregar(1));
	}

	public function testCantidad() {
		$mazo = new Mazo;
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$this->assertEquals($mazo->obtenerCantidad(),8);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$mazo->agregar(2);
		$this->assertEquals($mazo->obtenerCantidad(),11);
		
	}

	public function testObtenerCarta(){
		$mazo = new Mazo();
		$this->assertNull($mazo->obtenerCarta());
		$mazo->agregar(2);
		$mazo->agregar(4);
		$mazo->agregar(6);
		$mazo->agregar(3);
		$mazo->agregar(5);
		$mazo->agregar(12);
		$this->assertEquals($mazo->obtenerCarta(),2);
		$this->assertEquals($mazo->obtenerCarta(),4);
		$this->assertEquals($mazo->obtenerCarta(),6);
		$this->assertEquals($mazo->obtenerCarta(),3);
		$this->assertEquals($mazo->obtenerCarta(),5);
		$this->assertEquals($mazo->obtenerCarta(),12);
		$this->assertNull($mazo->obtenerCarta());
	}

}
