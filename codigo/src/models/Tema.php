<?php

namespace App\models;

class Tema extends Pessoa{
    
    protected static $tableName = 'tema';
    protected static $columns = [
        'id_tema',
	    'titulo',
    ];
}