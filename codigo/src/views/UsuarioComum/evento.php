<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/evento.css"/>
    <title>Alexandria</title>
</head>
<?php
    require_once "../template/header.php";
?>
<body>
    <div class="container">

        <div id="conteudo_evento_artigo">
            <div class="alinha_lado">
                <h1 id="h1_evento">BSD DAY</h1>
                <form>
                    <label for="edicao">Edição:</label>
                <select name="edicao" id="edicao">
                    <option value="edicao_1">Edição 1</option>
                    <option value="edicao_2">Edição 2</option>
                </select>
            </form>
        </div>
        <p class="nome_cadastrador">RIZZO, Nilton José;</p>
        <span>Tema</span>
        <h3 class="nome_tema">O uso do software livre no cotidiano do brasileiro médio</h3>
        <span>Artigos</span>
        <div class="cards">
            <div class="artigo">
                <a href=""><p class="nome_artigo">BSD Day</p></a>
                <p class="nome_autor">RIZZO, Nilton José;</p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
            <div class="artigo">
                <a href=""><p class="nome_artigo">Nome do Artigo</p></a>
                <p class="nome_autor">Nome do Autor;</p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
            <div class="artigo">
                <a href=""><p class="nome_artigo">Nome do Artigo</p></a>
                <p class="nome_autor">Nome do Autor;</p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
        </div>
        <span>Tema</span>
        <h3 class="nome_tema">O Futuro do Armazenamento em Memória</h3>
        <span>Artigos</span>
        <div class="cards">
            <div class="artigo">
                <a href=""><p class="nome_artigo">Boas Práticas de Otimização</p></a>
                <p class="nome_autor">SERRA, Sergio Manuel; </p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
            <div class="artigo">
                <a href=""><p class="nome_artigo">Nome do Artigo</p></a>
                <p class="nome_autor">Nome do Autor;</p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
            <div class="artigo">
                <a href=""><p class="nome_artigo">Nome do Artigo</p></a>
                <p class="nome_autor">Nome do Autor;</p>
                <button class="btn_download"><img src="../../../public/assets/img/download.svg">Download</button>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    require_once "../template/footer.php";
    ?>
</html>