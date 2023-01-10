<?php

namespace App\models;

class Usuario extends Pessoa {
    private $senha;
    private $tipoUsuario;
    private $cpf;
    private $telefone;
    private $admin;

    function __construct($id, $nome, $sexo, $instituicao, $email, $linkLattes, $senha, $tipoUsuario, $cpf, $telefone, $admin){
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->instituicao = $instituicao;
        $this->email = $email;
        $this->linkLattes = $linkLattes;
        $this->senha = $senha;
        $this->tipoUsuario = $tipoUsuario;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->admin = $admin;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getAdmin() {
        return $this->admin;
    }


    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function setAdmin($admin) {
        $this->admin = $admin;
    }

}