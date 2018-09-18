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


}
