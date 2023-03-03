<?php
//responsável pela conexão com o BD
class Database
{
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/../env.ini'); //caminho com a config
        $env = parse_ini_file($envPath);

        $conn = new mysqli($env['host'], $env['username'],
        $env['password'], $env['database']);

        if ($conn->connect_error){//detecta erro de conexão
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery($sql){
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    //os dois recebem uma query como parâmetro
    public static function executeSQL($sql){
        $conn = self::getConnection();
        if(!mysqli_query($conn, $sql)){
            throw new Exception(mysqli_error($conn));
        }
        $idCon = $conn->insert_id;
        $conn->close();
        return $idCon;
    }
}