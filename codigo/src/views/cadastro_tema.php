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
        <div id="cadastro_tema">
            <form id="cadastro_tema" action="#" method="post">
                <?php include(TEMPLATE_PATH . '/messages.php') ?><!--inclui o arquivo de mensages de erro/confirmação-->
                <label>
                    Título
                    <input type="titulo_tema" id="titulo_tema" name="titulo_tema" value="<?=$_POST['titulo_tema']?> "placeholder="Informe o título" autofocus>
                </label>
                <br>
                <label>
                    Descrição
                    <input type="descricao_tema" id="descricao_tema" name="descricao_tema" value="<?=$_POST['descricao_tema']?> "placeholder="Informe a descrição sucinta" autofocus>
                </label>
                <a href="/home.php"><button class="btn_cancela">Cancelar</button></a>
                <a href="/home.php"><button class="btn_salva">Enviar</button></a>
            </form>
        </div>
    </div>
</body>
</html>