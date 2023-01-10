<?php

namespace App\models;

class Admin extends Usuario {
    function __construct($id, $nome, $sexo, $instituicao, $email, $linkLattes, $senha, $cpf, $telefone) {
        parent::__construct($id, $nome, $sexo, $instituicao, $email, $linkLattes, $senha, 'adm', $cpf, $telefone, true);
    }

    public function autorizaEvento($idEvento) {

    }
}