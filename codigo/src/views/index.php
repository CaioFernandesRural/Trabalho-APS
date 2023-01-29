<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Document</title>
</head>
<?php
    require_once "header.php";
?>
<body>
    <div id="conteudo">
        <div id="filtro">
            <div id="titulo_filtro">
                <p>Filtros</p>
            </div>
            <form id="form_filtro">
                <input type="checkbox" id="check_1">
                <label for="check_1">
                    Checkbox 1
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 2
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 3
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 4
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 5
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 6
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 7
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 8
                </label><br>
                <input type="checkbox">
                <label for="check_1">
                    Checkbox 9
                </label><br>
            </form>
        </div>
        <div id="cards_eventos">
            <div id="evento">
                <a href=""><p id="nome_evento">BSD Day</p></a>
                <p id="nome_cadastrador">RIZZO, Nilton José;</p>
                <p id="descricao_evento">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor velit, tempor at felis sit amet, pretium maximus augue. In fermentum, ligula ac pharetra</p>
            </div>
            <div id="evento">
                <a href=""><p id="nome_evento">Nome do Evento</p></a>
                <p id="nome_cadastrador">Nome do Cadastrador;</p>
                <p id="descricao_evento">(Descrição)</p>
            </div>
        </div>
    </div>
</body>
<?php
    require_once "footer.php";
?>
</html>