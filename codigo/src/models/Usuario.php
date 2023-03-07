<?php

namespace App\models;

use AppException;
use ValidationException;
use Database;

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

    public static function getOne($filters, $columns = '*'){

        $class = get_called_class(); //nome da classe que chamou o método
        $result = static::getResultSetFromSelect($filters, $columns);

        return $result ? new $class($result->fetch_assoc()) : null;
    }

    public static function get($filters = [], $columns = '*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);

        if($result){
            $class = get_called_class();
            while($row = $result->fetch_assoc()){
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }

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

    public function cadastrar(){

        $this->Validate();
        $this->admin = $this->admin ? 1 : 0;
        
        #$this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
        //encripta a senha

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

    public static function deleteByID($id){
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

    public function validateLogin(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'Email obrigatório.';
        }
        if(!$this->senha){
            $errors['senha'] = 'Senha obrigatória.';
        }

        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }

    public function autenticar(){
        $this->validateLogin();
        $user = Usuario::getOne(['email' => $this->email]);

        if($user){

            if($this->senha === $user->senha){
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
            throw new ValidationException($errors);
        }
    }

    private function solicitarCadastro($evento){
        //não faço a menor ideia de como codar isso acho que vai ser no controller a maior parte
    }
}