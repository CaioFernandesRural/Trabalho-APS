<?php

namespace App\models;

class Cadastrador extends Usuario {
    function __construct($id, $nome, $sexo, $instituicao, $email, $linkLattes, $senha, $cpf, $telefone) {
        parent::__construct($id, $nome, $sexo, $instituicao, $email, $linkLattes, $senha, 'cad', $cpf, $telefone, false);
    }

    public function enviaConvite($email){
        
    }
    public function removeConvidado($email){
        
    }
}