<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/cadastro.css"/>
    <title>Alexandria</title>
</head>
<body>
    <div class="container">
        <p class="titulo_cadastro">Dados do Evento</p>
        <div class="cadastro">
            <form action="#" method="post">
                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                    <div class="form_container">
                        <div class="div_form">
                            <label for="nome_evento">Nome</label>
                            <input type="text" name="nome_evento" id="nome_evento"
                            value="<?= $nome_evento ?>">
                            <div class="invalid-feedback">
                                <?= $errors['nome_evento'] ?>
                            </div>
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo">
                            <?php
                            foreach($eventos as $evento){
                                echo "<option value='{$evento->tipo}' >{$evento->tipo}</option>";
                            }
                            ?>
                            </select>
                            <br>
                            <label for="area_de_estudo">Área de Estudo</label>
                            <input type="text" id="area_de_estudo" name="area_de_estudo"
                            value="<?= $area_de_estudo ?>">
                            <div class="invalid-feedback">
                                <?= $errors['area_de_estudo'] ?>
                            </div>
                            
                        </div>
                        <div class="div_form">
                            
                            <label for="descricao">Descrição Sucinta</label>
                            <input type="text" id="descricao" name="descricao"
                            value="<?= $descricao ?>">
                            <div class="invalid-feedback">
                                <?= $errors['descricao'] ?>
                            </div>
                            <label for="link_evento">Link do Evento</label>
                            <input type="url" id="link_evento" name="link_evento"
                            value="<?= $link_evento ?>">
                            <div class="invalid-feedback">
                                <?= $errors['link_evento'] ?>
                            </div>
                            <label for="ano">Ano</label>
                            <input type="text" name="ano" id="ano"
                            value="<?= $ano ?>">
                            <div class="invalid-feedback">
                                <?= $errors['ano'] ?>
                            </div>
                        </div>    
                    </div>    
                    <a href="/home.php"><button class="btn_cancela">Cancelar</button></a>
                    <a href="/home.php"><button class="btn_salva">Enviar</button></a>
            </form>
        </div>
    </div>
</body>
</html>