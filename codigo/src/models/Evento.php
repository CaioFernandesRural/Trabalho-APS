<?php

namespace App\models;
use ValidationException;

class Evento extends Pessoa{
    
    protected static $tableName = 'evento';
    protected static $columns = [
        'id',
        'nome',
        'tipo',
        'area_de_estudo',
        'id_cadastrador',
        'descricao',
        'link_evento',
        'autorizado',
        'ano'
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

        if(!$this->tipo){
            $errors['tipo'] = 'Tipo é Obrigatório';
        }

        if(!$this->area_de_estudo){
            $errors['area_de_estudo'] = 'Area de estudo é Obrigatória';
        }

        if(!$this->descricao){
            $errors['descricao'] = 'Descrição é Obrigatória';
        }

        if(!$this->link_evento){
            $errors['link_evento'] = 'Link do evento é Obrigatória';
        }
        
        if(!$this->ano){
            $errors['ano'] = 'Ano é Obrigatório';
        }

        if(count($errors)){
            throw new ValidationException($errors);
        }
    }
}