<?php

namespace App\models;

abstract class Pessoa {
    private $id;
    private $nome;
    private $sexo;
    private $instituicao;
    private $email;
    private $linkLattes;

    public function getId() {
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getInstituicao() {
        return $this->instituicao;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getLinkLattes() {
        return $this->linkLattes;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setLinkLattes($linkLattes) {
        $this->linkLattes = $linkLattes;
    }

}