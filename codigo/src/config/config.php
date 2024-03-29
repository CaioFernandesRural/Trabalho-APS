<?php

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);//desabilita alerta de variáveis indefinidas

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//Constantes Gerais
define('DAILY_TIME', 60 * 60 * 8);

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

//Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH . '/Pessoa.php'));
require_once(realpath(MODEL_PATH . '/Usuario.php'));
require_once(realpath(MODEL_PATH . '/Evento.php'));
require_once(realpath(MODEL_PATH . '/Artigo.php'));
require_once(realpath(MODEL_PATH . '/Tema.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));