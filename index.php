<?php

$dados = $_REQUEST;

$irParaListagem = empty($dados) || !isset($dados["rota"]);

if ($irParaListagem) {
    echo "estou na listagem fallback";
    return;
}

$rota = $dados ["rota"];

if ($rota == "listar") {
    echo "estou na listar";
}

if ($rota == "editar") {
    echo "estou na editar";
}

if ($rota == "criar") {
    echo $dados["nome"] = "João<br>";
    echo $dados["id"] = "101<br>";
    echo $dados["idade"] = "16<br>";
    echo "estou na criar";
}

if ($rota == "atualizar") {
    echo "estou na atualizar";
}

if ($rota == "excluir") {
    echo "estou na excluir";
}
