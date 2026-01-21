<?php

require_once "./EntityAbstract.php";

class EnderecoEntity extends EntityAbstract {

    public $logradouro;

    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }

}

