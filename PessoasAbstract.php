<?php

define("QUEBRAR_LINHA", "<br>");

abstract class PessoaAbstract {

    public $nome;
    public $idade;
    public $logradouro;
    public $cep;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoDeReferencia;

    public function resetarPessoa(){
        $this->nome = "";
        $this->idade = "";
        $this->logradouro = "";
        $this->cep = "";
        $this->cidade = "";
        $this->estado = "";
        $this->numero = "";
        $this->complemento = "";
        $this->pontoDeReferencia = "";
    }

    public function validarCPF($cpf) {
        echo "123.456.789-10";
    }

    public function validarCNPJ($cnpj) {
         echo "12.345.678/0001-22";
    }

}