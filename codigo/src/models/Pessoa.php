<?php

namespace App\models;

abstract class Pessoa {
    protected static $tableName = ''; //nome da tabela no banco
    protected static $columns = []; //colunas da tabela no banco
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
}