<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/cadastro_login.css"/>
    <title>Alexandria</title>
</head>
<?php
    require_once "../template/header.php";
?>
<body>
    <div class="container">
            <div id="login">
                <img src="../../../public/assets/img/icon_login.png" id="icon_login">
                <form id="form_login">
                    <label>
                        <img src="../../../public/assets/img/email.png" class="icons_login">
                        <input type="email" id="email" name="email" placeholder="E-mail">
                    </label>
                    <br>
                    <label>
                        <img src="../../../public/assets/img/senha.png" class="icons_login">
                        <input type="password" id="senha" name="senha" placeholder="●●●●●">
                    </label>
                </form>
                <div class="inscreva-se">
                    <p>Não tem uma conta? <a>Inscreva-se</a></p>
                </div>
        </div>
</div>
</body>
<?php
    require_once "../template/footer.php";
    ?>
</html>