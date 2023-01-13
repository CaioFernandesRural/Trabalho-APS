<?php

namespace App\models;

class Tema{
    private $id;
    private $descricao;

    public function getId() {
        return $this->id;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function cadastraTema($id, $descricao) {

    }
    public function verTemas() {

    }
    public function verTema($id) {

    }
    public function editaTema($id, $descricao) {

    }
    public function deletaTema($id) {

    }
}