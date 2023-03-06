<?php

namespace App\models;
use ValidationException;

class Artigo extends Pessoa{

    protected static $tableName = 'artigo';
    protected static $columns = [
        'id',
        'titulo',
        'subtitulo',
        'data_de_publicacao',
        'idioma',
        'resumo',
        'num_paginas',
        'num_downloads',
        'doi',
        'arquivo',
        'id_tema',
        'id_evento',
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

        if(!$this->titulo){
            $errors['titulo'] = 'titulo é Obrigatório';
        }

        if(!$this->subtitulo){
            $errors['subtitulo'] = 'subtitulo é Obrigatório';
        }

        if(!$this->data_de_publicacao){
            $errors['data_de_publicacao'] = 'Data de publicacao é Obrigatória';
        }

        if(!$this->idioma){
            $errors['idioma'] = 'Idioma é Obrigatório';
        }

        if(!$this->resumo){
            $errors['resumo'] = 'Resumo do evento é Obrigatório';
        }
        
        if(!$this->num_paginas){
            $errors['num_paginas'] = 'Número de páginas Obrigatório';
        }
        
        if(!$this->doi){
            $errors['doi'] = 'doi é Obrigatório';
        }
        
        if(!$this->arquivo){
            $errors['arquivo'] = 'Arquivo é Obrigatório';
        }
        
        if(count($errors)){
            throw new ValidationException($errors);
        }
    }

}