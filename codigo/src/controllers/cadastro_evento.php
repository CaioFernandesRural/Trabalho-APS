<?php

use App\models\Evento;

session_start();
requireValidSession();

$exception = null;
$userData = [];

if (count($_POST) > 0){
    try {

        $entrada = [
            'nome'=>$_POST['nome_evento'],
            'tipo'=>$_POST['tipo'],
            'area_de_estudo'=>$_POST['area_de_estudo'],
	        'id_cadastrador'=>$_SESSION['user']->id, //pega o id da session
            'descricao'=>$_POST['descricao'],
            'link_evento'=>$_POST['link_evento'],
            'autorizado'=>false,
            'ano'=>$_POST ['ano']
        ];

        $dbUser = new Evento($entrada); //passando pro contructor os parâmetros do post
        
        $dbUser->cadastrarEvento();
        $_POST = [];
        addSuccessMsg('Evento cadastrado com sucesso');
        header("Location: home.php");
        
    } catch (Exception $e) {
        $exception = $e;
    } finally{
        $userData = $_POST;
    }
}

$eventos = Evento::vizulizarListaDeEventos();

loadTemplateView('cadastro_evento', $userData + [
    'exception' => $exception,
    'eventos' => $eventos
]);