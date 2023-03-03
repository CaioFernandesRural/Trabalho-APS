<?php

namespace App\models;

use AppException;
use ValidationException;

class Usuario extends Pessoa {

    protected static $tableName = 'usuario';
    protected static $columns = [
        'id',
        'nome',
        'senha',
        'email',
        'tipo_usuario',
        'telefone',
        'instituicao',
        'link_lattes',
        'sexo',
        'cpf',
        'admin'
    ];

    public function insert(){
        
        $this->Validate();
        $this->admin = $this->admin ? 1 : 0;
        
        #$this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
        //encripta a senha
        return parent::insert();
    }

    public function update(){

        $this->Validate();
        $this->is_admin = $this->is_admin ? 1 : 0;

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::update();
    }

    public function validateLogin(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'Email obrigatório.';
        }
        if(!$this->password){
            $errors['password'] = 'Senha obrigatória.';
        }

        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }

    public function checkLogin(){
        $this->validateLogin();
        $user = Pessoa::getOne(['email' => $this->email]);
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException('Usuário/ Senha inválido(a).');
    }

    private function Validate(){
        $errors = [];

        if(!$this->nome){
            $errors['nome'] = 'Nome é Obrigatório';
        }

        if(!$this->email){
            $errors['email'] = 'Email é Obrigatório';
        } elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email Inválido';
        }

        if(!$this->senha){
            $errors['senha'] = 'Senha é Obrigatória';
        }
        if(!$this->confirmar_senha){
            $errors['confirmar_senha'] = 'Confirmação é Obrigatória';
        } elseif($this->senha !== $this->confirmar_senha){
            $errors['senha'] = 'Senhas Diferentes';
            $errors['confirmar_senha'] = 'Senhas Diferentes';
        }

        if(!$this->telefone){
            $errors['telefone'] = 'Telefone é Obrigatório';
        } //elseif validar telefone

        if(!$this->instituicao){
            $errors['instituicao'] = 'instituicao é Obrigatório';
        }

        if(!$this->link_lattes){
            $errors['link_lattes'] = 'O link do lattes é Obrigatório';
        }

        if(!$this->sexo){
            $errors['sexo'] = 'Sexo é Obrigatório';
        }

        if(!$this->cpf){
            $errors['cpf'] = 'CPF é Obrigatório';
        }

        if(!$this->admin){ //setar pra booleano caso venha nulo
            $this->admin = false;
        }
        
        if(count($errors)){
            /*foreach ($errors as $key => $value) {
                echo("<br>" . $value . "<br>");
            }*/ //medidas extramas requerem soluções extremas
            throw new ValidationException($errors);
        }
    }

    private function solicitarCadastro($evento){
        //não faço a menor ideia de como codar isso acho que vai ser no controller a maior parte
    }
}