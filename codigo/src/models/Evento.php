<?php

namespace App\models;

class Evento extends Organizador{
    
    protected static $tableName = 'evento';
    protected static $columns = [
        'id',
	    'nome',
        'tipo',
	    'area_de_estudo',
	    'id_cadastrador'
    ];

    public function insert(){
        
        $this->Validate();
        $this->is_admin = $this->id_admin ? 1 : 0;
        
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::insert();
    }

    public function update(){

        $this->Validate();
        $this->is_admin = $this->is_admin ? 1 : 0;

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::update();
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
        } elseif($this->password !== $this->confirmar_senha){
            $errors['password'] = 'Senhas Diferentes';
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
        
        if(count($errors)){
            throw new ValidationException($errors);
        }
    }
}