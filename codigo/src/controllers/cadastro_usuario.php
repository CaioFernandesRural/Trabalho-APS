<?php

use App\models\Usuario;

session_start();
#requireValidSession(false); //n precisa de sessão

$exception = null;
$userData = [];

if (count($_POST) > 0){
    try {

        $entrada = [ //selecionar o que entra do post
           'nome'=>$_POST['nome'],
           'senha'=>$_POST['senha'],
           'confirmar_senha'=>$_POST['confirmar_senha'],
           'email'=>$_POST['email'],
           'telefone'=>$_POST['telefone'],
           'instituicao'=>$_POST['instituicao'],
           'link_lattes'=>$_POST['link_lattes'],
           'sexo'=>$_POST['sexo'],
           'cpf'=>$_POST['cpf'],
           'tipo_usuario'=>'comum',
        ];

        $dbUser = new Usuario($entrada); //passando pro contructor os parâmetros do post

        $dbUser->insert();
        addSuccessMsg('Usuário cadastrado com sucesso');
        $_POST = [];
        
    } catch (Exception $e) {
        $exception = $e;
    } finally{
        $userData = $_POST;
        header("Location: home.php");
    }
}

loadTemplateView('cadastro_usuario', $userData + ['exception' => $exception]);