<?php

require_once "./PessoaAbstract.php";
define("QUEBRAR_LINHA", "<br>");

class PessoaFisica extends PessoaAbstract {
    
    public $CPF = [];

    public function __construct()
    {
        $this->resetarPessoa();
        $this->CPF = "";
    }
}
