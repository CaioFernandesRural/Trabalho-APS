<?php

use App\models\Usuario;//não era pra aparecer isso

loadModel('Usuario');//Chama o objeto Usuario que tem os métodos do sql
session_start();
$exception = null;

if(count($_POST) > 0){ //se tiver algo no POST

    $entrada = [
        'email'=>$_POST['email'],
        'senha'=>$_POST['senha']
    ];

    $login = new Usuario($entrada);

    try{
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;//seta usuário da sessão
        header("Location: home.php");//joga pra home
    } catch (AppException $e) {
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);