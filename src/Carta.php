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
        
        if($numero <= 12 && $numero > 0){
            $this->numero = $numero;
        }else{
            switch(strtolower($numero)){
            case "as":
            case "k":
            case "q":
            case "j":
                $this->numero = $numero;
                break;
            default:
                $this->numero = 2;
            }
        }
    }

    public function verPalo(){
        return $this->palo;
    }

    public function verNumero(){
        return $this->numero;
    }

}