<?php

require_once "./EnderecoEntity.php";
require_once "./CidadeEntity.php";
require_once "./EstadoEntity.php";

class Endereco {

    public EstadoEntity $estado;
    public CidadeEntity $cidade;
    public EnderecoEntity $endereco;
}
