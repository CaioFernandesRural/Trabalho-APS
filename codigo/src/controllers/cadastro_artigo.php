<?php

use App\models\Artigo;
use App\models\Pessoa;
use App\models\Tema;

session_start();
requireValidSession();

$exception = null;
$userData = [];

if (count($_POST) > 0){
    try {

        $entrada = [
            'titulo'=>$_POST['titulo'],
            'subtitulo'=>$_POST['subtitulo'],
            'data_de_publicacao'=>$_POST['data_de_publicacao'],
	        'idioma'=>$_POST['idioma'],
            'resumo'=>$_POST['resumo'],
            'num_paginas'=>$_POST['num_paginas'],
            'doi'=>$_POST['doi'],
            'arquivo'=>$_POST['arquivo'],
            'id_evento'=>$_GET['id_evento'],
            'id_tema'=>$_POST['tema'],
            'num_downloads'=>0
        ];

        $dbUser = new Artigo($entrada); //passando pro contructor os parâmetros do post

        $dbUser->cadastrarArtigo();
        addSuccessMsg('Artigo cadastrado com sucesso');
        $_POST = [];
        header("Location: evento.php");
        
    } catch (Exception $e) {
        $exception = $e;
    } finally{
        $userData = $_POST;
    }
}

$temas = Tema::vizulizarListaDeTemas();

loadTemplateView('cadastro_artigo', $userData + [
    'exception' => $exception,
    'temas' => $temas,
]);