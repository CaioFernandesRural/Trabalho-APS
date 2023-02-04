<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/login.css"/>
    <title>Alexandria</title>
</head>
<?php
    require_once "./template/header.php";
?>
<body>
    <div id="container">
        <div id="login">
            <img src="./img/icon_login.png" id="icon_login">
            <form id="form_login">
                <label>
                    <img src="./img/email.png" class="icons_login">
                    <input type="text" id="email" placeholder="E-mail">
                </label>
                <br>
                <label>
                    <img src="./img/senha.png" class="icons_login">
                    <input type="text" id="senha" placeholder="●●●●●">
                </label>
            </form>
            <p>Não tem uma conta? <a>Inscreva-se</a></p>
        </div>
</div>
</body>
<?php
    require_once "./template/footer.php";
?>
</html>