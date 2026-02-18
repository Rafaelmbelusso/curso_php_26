<?php

require_once"./conexao.php";
require_once"/.bancoDeDados.php";
require_once"./UsuarioEntity.php";

$banco = new BancoDados($conexao);
$usuarioModel = new UsuarioEntity($banco);