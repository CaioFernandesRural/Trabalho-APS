<?php

namespace App\models;

class Autor extends Pessoa {
    function __construct($id, $nome, $sexo, $instituicao, $email, $linkLattes){
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->instituicao = $instituicao;
        $this->email = $email;
        $this->linkLattes = $linkLattes;
    }
}