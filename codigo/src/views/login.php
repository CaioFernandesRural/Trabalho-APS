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
        <div id="login">
            <img src="/assets/img/icon_login.png" id="icon_login">
            <form id="form_login" action="#" method="post">
                <?php include(TEMPLATE_PATH . '/messages.php') ?><!--inclui o arquivo de mensages de erro/confirmação-->
                <label>
                    <img src="/assets/img/email.png" class="icons_login">
                    <input type="email" id="email" name="email"
                    <?= $errors['email'] ? 'is-invalid' : '' ?>
                    <?php if(isset($_POST['email'])):?>
                    value="<?=$_POST['email']?>"
                    <?php endif; ?>
                    placeholder="Informe o e-mail" autofocus>
                </label>
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
                <br>
                <label>
                    <img src="/assets/img/senha.png" class="icons_login">
                    <input type="password" id="senha" name="senha" placeholder="●●●●●">
                </label>
                <div class="invalid-feedback">
                    <?= $errors['senha'] ?>
                </div>
                <div class="card-footer">
                    <button class="btn">Entrar</button>
                </div>
            </form>
            <div class="inscreva-se">
                <p>Não tem uma conta? <a href="cadastro_usuario.php">Inscreva-se</a></p>
            </div>
        </div>
    </div>
</body>
</html>