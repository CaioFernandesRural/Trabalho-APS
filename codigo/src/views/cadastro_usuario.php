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

<?php include(TEMPLATE_PATH . "/messages.php") ?>

<body>
    <div class="container">
        <div class="cadastro">
            <p class="titulo_cadastro">Dados de Cadastro</p>
            <form action="#" method="post">
                <input type="hidden" name="id" id="id" value="<?= $id ?>">
                <div class="form_container">
                    <div class="div_form">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome"
                        value="<?= $nome ?>">
                        <div class="invalid-feedback">
                            <?= $errors['nome'] ?>
                        </div>
                        <br>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" value="<?= $sexo ?>">
                            <option value="fem">Feminino</option>
                            <option value="masc">Masculino</option>
                            <option value="outros">Outros</option>
                        </select>
                        <br>
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf"
                        value="<?= $cpf ?>">
                        <div class="invalid-feedback">
                            <?= $errors['cpf'] ?>
                        </div>
                        <br>
                        <label for="instituicao">Instituição</label>
                        <input type="text" id="instituicao" name="instituicao"
                        value="<?= $instituicao ?>">
                        <div class="invalid-feedback">
                            <?= $errors['instituicao'] ?>
                        </div>
                        <br>
                        <label for="link_lattes">Link do Currículo Lattes</label>
                        <input type="url" id="link_lattes" name="link_lattes" 
                        value="<?= $link_lattes ?>">
                        <div class="invalid-feedback">
                            <?= $errors['link_lattes'] ?>
                        </div>
                    </div>
                    <div class="div_form">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone"
                        value="<?= $telefone ?>">
                        <div class="invalid-feedback">
                            <?= $errors['telefone'] ?>
                        </div>
                        <br>
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email"
                        value="<?= $email ?>">
                        <div class="invalid-feedback">
                            <?= $errors['email'] ?>
                        </div>
                        <br>
                    <label for="confirma_email">Confirme seu e-mail</label>
                    <input type="email" id="confirma_email" name="confirma_email">
                    <div class="invalid-feedback">
                        <?= $errors['confirma_email'] ?>
                    </div>
                    <br>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                    <div class="invalid-feedback">
                        <?= $errors['senha'] ?>
                    </div>
                    <br>
                    <label for="confirmar_senha">Confirme sua senha</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha">  
                    <div class="invalid-feedback">
                        <?= $errors['confirmar_senha'] ?>
                    </div>
                </div>    
            </div>
            <div class="button-container">
                <a href="/home.php"><button class="btn_cancela">Cancelar</button></a>
                <a href="/home.php"><button class="btn_salva">Enviar</button></a>
            </div>
        </form>
        
    </div>
</div>
</body>
</html>