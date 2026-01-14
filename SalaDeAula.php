<?php

define("QUEBRAR_LINHA", "<br>");
class SalaDeAula {

    public $numero = 101;
    public $classes = [];
    public $luzLigada;
    public $lampadaQueimada;
    public $arCondicionado = "";

    public function __construct($numero)
    {
        $this->numero = $numero;
        $this->luzLigada = false;
        $this->lampadaQueimada = false;
    }

    public function ligarLuz(){
        $estaQueimada = $this->verificarLampada();

        if ($estaQueimada){
        return "A sala numero  {$this->numero} está com a lâmpada queimada" . QUEBRAR_LINHA;
        }

        $this-> luzLigada = true;

        return "A sala numero {$this->numero} está com a luz ligada" . QUEBRAR_LINHA;
    }

    public function desligarLuz(){
        $this->luzLigada = false;
        return "A sala numero {$this->numero} esta com a luz desligada" . QUEBRAR_LINHA;
    }

    public function verificarLampada (){
    $estaQueimada = $this->lampadaQueimada;
    
    if ($estaQueimada) {
        return true;
    } else{
        return false;
    }

    }

    public function queimarLampada(){

    $this->lampadaQueimada = true;
    $this->luzLigada = false;

    }

    public function trocarLampada(){

        $estaLigada = $this->luzLigada;

        if ($estaLigada){


        }
        $this->lampadaQueimada = false;
        $this->luzLigada = false;
    }
}

$objSalaDeAula = new SalaDeAula(101);
echo $objSalaDeAula->ligarLuz();
$objSalaDeAula->queimarLampada();
echo $objSalaDeAula->ligarLuz();
$objSalaDeAula->trocarLampada();
echo $objSalaDeAula->ligarLuz();