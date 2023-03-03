<?php

namespace App\models;

class Evento extends Organizador{
    
    protected static $tableName = 'evento';
    protected static $columns = [
        'id',
	    'nome',
        'tipo',
	    'area_de_estudo',
	    'id_cadastrador',
        
    ];

    public function insert(){
        
        $this->Validate();

        return parent::insert();
    }

    public function update(){

        $this->Validate();

        return parent::update();
    }

    private function Validate(){
        $errors = [];

        if(!$this->nome){
            $errors['nome'] = 'Nome é Obrigatório';
        }

        if(!$this->link_evento){
            $errors['link_evento'] = 'O link do evento é Obrigatório';
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