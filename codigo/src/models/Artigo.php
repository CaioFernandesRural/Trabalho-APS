<?php

namespace App\models;
use ValidationException;
use Database;

class Artigo{

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
    protected $values = []; //para evitar vários set's get's, array com chave-valor

    function __construct($arr, $sanitize = true){
        $this->loadFromArray($arr, $sanitize);
    }

    //métodos mágicos
    public function __get($key){
        return $this->values[$key];
    }
    public function __set($key, $value){
        $this->values[$key] = $value;
    }

    public function getValues(){
        return $this->values;
    }

    //carrega o objeto a partir de um array, tenta trabalhar com valores "limpos"
    public function loadFromArray($arr, $sanitize = true){
        if ($arr){
            #$conn = Database::getConnection();
            foreach ($arr as $key => $value){
                $cleanValue = $value;
                if($sanitize && isset($cleanValue)){
                    $cleanValue = strip_tags(trim($cleanValue));
                    $cleanValue = htmlentities(trim($cleanValue));
                    #$cleanValue = mysqli_real_escape_string($conn, $cleanValue);
                }
                $this->$key = $value;
            }
            #$conn->close();
        }
    }

    public static function vizualizarArtigo($filters, $columns = '*'){

        $class = get_called_class(); //nome da classe que chamou o método
        $result = static::getResultSetFromSelect($filters, $columns);

        return $result ? new $class($result->fetch_assoc()) : null;
    }

    /*public static function get($filters = [], $columns = '*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);

        if($result){
            $class = get_called_class();
            while($row = $result->fetch_assoc()){
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }*/

    public static function getResultSetFromSelect($filters = [], $columns = '*'){
        $sql = "SELECT {$columns} FROM " .
        static::$tableName .
        static::getFilters($filters);

        $result = Database::getResultFromQuery($sql);
        if($result->num_rows == 0){
            return NULL;
        } else {
            return $result;
        }
    }

    public function cadastrarArtigo(){

        $this->Validate();

        $sql = "INSERT INTO " . static::$tableName . " (" //inserir na TABELA x
            . implode(",", static::$columns) . ") VALUES (";//COLUNAS tais
        foreach(static::$columns as $col){
            $sql .= static::getFormatedValue($this->$col) . ",";//VALORES formatados retornados
        }
        
        $sql[strlen($sql) - 1] = ")";
        $id = Database::executeSQL($sql);
        $this->id = $id;

        //insere o OBJETO no banco.
    }

    public function editarArtigo(){

        $this->Validate();

        $sql = "UPDATE " . static::$tableName . " SET"; //update tabela
        foreach(static::$columns as $col){
            $sql .= " {$col} = " //coluna = 
            . static::getFormatedValue($this->$col) //valor formatado
            . ",";
        }
        $sql[strlen($sql) - 1] = " ";
        $sql .= "WHERE id = {$this->id}";
        Database::executeSQL($sql);
    }

    public static function deletarArtigo($id){
        $sql = "DELETE FROM " . static::$tableName . " WHERE id = {$id}";
        Database::executeSQL($sql);
    }

    private static function getfilters($filters){ //insere os filtros na query
        $sql = '';
        if(count($filters) > 0){
            $sql .= " WHERE 1 = 1";
            foreach($filters as $column => $value){
                if($column == 'raw'){
                    $sql .= " AND {$value}";
                } else {
                    $sql .= " AND {$column} = " . static::getFormatedValue($value);
                }
            }
        }
        return $sql;
    }

    private static function getFormatedValue($value){ //formata strings para o sql
        if (is_null($value)){
            return "null";
        } else {
            return "'{$value}'";
        }
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