<?php

namespace TDD;

class Carta {
    
    protected $numero;
    protected $palo;

    public function __construct($numero, $palo){

        switch(strtolower($palo)){
        case "copa":
        case "basto":
        case "espada":
        case "oro":
        case "picas":
        case "corazones":
        case "diamantes":
        case "treboles":
            $this->palo = $palo;
            break;
        default:
            $this->palo = "Copa";
            break;
        }
        
    }

    public function verPalo(){
        return $this->palo;
    }

}