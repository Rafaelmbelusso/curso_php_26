<?php

// CRUD - Creat, Read, Update and Delete.
interface EntityInterface {
    public function criar();
    public function obter($id);
    public function obterTodos($filtros = "");
    public function atualizar($id);
    public function deletar($id);

}

// Model || Entity, Representa a tabela do banco da programação
abstract class EntityAbstract implements EntityInterface {

    public $id;
    public $criadoEm;
    public $tabelaNome;
    public $atualizadoEm;
    public $usuarioAleracao;

    public function criar() {

    }

    public function obter($id) {

    }

    public function obterTodos($filtros = "") {

    }

    public function atualizar($id) {

    }

    public function deletar($id) {

    }

}