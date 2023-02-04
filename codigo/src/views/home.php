<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/home.css"/>
    <title>Alexandria</title>
</head>
<?php
    require_once "./template/header.php";
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
                    Congresso
                </label><br>
                <input type="checkbox" id="check_2">
                <label for="check_2">
                    Simpósio
                </label><br>
                <input type="checkbox" id="check_3">
                <label for="check_3">
                    Seminário
                </label><br>
                <input type="checkbox" id="check_4">
                <label for="check_4">
                    Mesa-redonda
                </label><br>
                <input type="checkbox" id="check_5">
                <label for="check_5">
                    Encontro
                </label><br>
                <input type="checkbox" id="check_6">
                <label for="check_6">
                    Painel
                </label><br>
                <input type="checkbox" id="check_7">
                <label for="check_7">
                    Fórum
                </label><br>
                <input type="checkbox" id="check_8">
                <label for="check_8">
                    Conferência
                </label><br>
                <input type="checkbox" id="check_9">
                <label for="check_9">
                    Jornada
                </label><br>
                <input type="checkbox" id="check_10">
                <label for="check_10">
                    Workshop
                </label><br>
                <input type="checkbox" id="check_11">
                <label for="check_11">
                    Colóquio
                </label><br>
                <input type="checkbox" id="check_12">
                <label for="check_12">
                    Cursos
                </label><br>
                <input type="checkbox" id="check_13">
                <label for="check_13">
                    Semana
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
    require_once "./template/footer.php";
?>
</html>