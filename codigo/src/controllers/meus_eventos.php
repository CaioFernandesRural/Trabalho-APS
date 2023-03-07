<?php

use App\models\Evento;
use App\models\Tema;

session_start();
requireValidSession();

$eventos = Evento::vizulizarListaDeEventos();
#$temas = [];

/*foreach ($eventos as $evento){
    $temasEvento = Tema::vizulizarListaDeTemas($evento->id);
    var_dump($temas);
    array_push($temas, $temasEvento); //seria algo do tipo
}*/

loadTemplateView('meus_eventos', [
    'eventos' => $eventos
]);