<?php

$errors = [];

if(isset($_SESSION['message'])){ //se message tiver setada na sessão
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

if($exception){ //se for passada um exception pelo controller
    $message = [
        'type' => 'error', //message vira error
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException'){ //se for uma exception de validação
        $errors = $exception->getErrors();
    }
}

$alertType = '';
//seta o tipo de alerta para erro ou sucesso
if($message['type'] === 'error'){
    $alertType = 'danger';
} else {
    $alertType = 'success';
}
?>
<!-- corpo html -->
<?php if(isset($message)): ?> 

<div role="alert" 
    class="<?=$alertType?>" ><!--fazer a estilização da classe-->
    <?= $message['message'] ?>
</div>

<?php endif; ?>