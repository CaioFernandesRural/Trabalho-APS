<?php

function requireValidSession($requiresAdmin = false){
    $user = $_SESSION['user'];

    if(!isset($user)){ //se user não tive setado
        header('Location: login.php');
        exit();
    } elseif($requiresAdmin && !$user->is_admin){ //se precisar ser admin e não for.
        addErrorMsg('Acesso negado');
        header('Location: home.php');
        exit();
    }
}