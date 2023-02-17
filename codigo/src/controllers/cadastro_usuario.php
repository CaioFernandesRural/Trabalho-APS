<?php

use App\models\Usuario;

session_start();
//requireValidSession(false); //n precisa de sessão

$exception = null;
$userData = [];

//caso a página seja de update também
if(!count($_POST) && isset($_GET['update'])){
    $user = Usuario::getOne(['id' => $_GET['update']]);//procura o usuário pelo id
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif (count($_POST) > 0){
    try {
        $dbUser = new Usuario($_POST); //passando pro contructor os parâmetros do post
        if ($dbUser->id){ //se for um usuário com id( já cadastrado )
            $dbUser->update();
            addSuccessMsg('Usuário alterado com sucesso');
            header('Location: users.php');
            exit();
        } else {
            $dbUser->insert();
            addSuccessMsg('Usuário cadastrado com sucesso');
            $_POST = [];
        }
    } catch (Exception $e) {
        $exception = $e;
    } finally{
        $userData = $_POST;
    }
}

loadTemplateView('cadastro_usuario', $userData + ['exception' => $exception]);