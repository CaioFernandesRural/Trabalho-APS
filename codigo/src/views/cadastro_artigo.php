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

        <p class="titulo_cadastro">Dados do Artigo</p>
        <div class="cadastro">
            <form action="#" method="post">
                <div class="form_container">
                    <div class="div_form">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo">
                        <br>
                        <label for="subtitulo">Subtitulo</label>
                        <input type="text" name="subtitulo" id="subtitulo">
                        <br>
                        <label for="data_artigo">Data de Publicação</label>
                        <input type="date" id="data_artigo" name="data_artigo">
                        <br>
                        <label for="idioma">Idioma</label>
                        <input type="text" id="idioma" name="idioma">
                        <br>
                        <label for="tema">Tema</label>
                        <input type="checkbox" name="tema1" id="tema1" value="tema1">
                        <label for="tema1"> Tema 1</label><br>
                        <input type="checkbox" name="tema1" id="tema1" value="tema2">
                        <label for="tema1"> Tema 2</label><br>
                        <label for="outro">Outro</label>
                        <input type="text" id="outro" name="outro">
                        <br>
                    </div>
                    <div class="div_form">
                        <label for="doi">DOI</label>
                        <input type="text" id="doi" name="doi">
                        <br>
                        <label for="palavras_chave">Palavras-Chave</label>
                        <input type="text" id="palavras_chave" name="palavras_chave">
                    <br>
                    <label for="num_paginas">Número de Páginas</label>
                    <input type="number" id="num_paginas" name="num_paginas">
                    <br>
                    <label for="edicao_artigo">Edição</label>
                    <select name="edicao_artigo" id="edicao_artigo">
                        <option value="edicao_1">Edição 1</option>
                        <option value="edicao_2">Edição 2</option>
                    </select>
                    <br>
                    <label for="descricao_artigo">Descrição Sucinta</label>
                    <input type="text" id="descricao_artigo" name="descricao_artigo">
                </div>    
            </div>
            <a href="/home.php"><button class="btn_cancela">Cancelar</button></a>
            <a href="/home.php"><button class="btn_salva">Enviar</button></a>
        </form>
    </div>    
</div>
</body>
</html>