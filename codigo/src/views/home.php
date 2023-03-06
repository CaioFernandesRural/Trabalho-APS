<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/home.css"/>
    <title>Alexandria</title>
</head>

<?php include(TEMPLATE_PATH . "/messages.php") ?>

<body>
    <div class="container">

        <div id="conteudo">
            <div id="filtro">
                <div id="titulo_filtro">
                    <p>Filtros</p>
                </div>
                <form id="form_filtro">
                    <label for="congresso">
                        <input type="checkbox" id="congresso" name="congresso">
                        Congresso
                    </label>
                    <label for="simposio">
                        <input type="checkbox" id="simposio" name="simposio">
                        Simpósio
                    </label>
                    <label for="seminario">
                        <input type="checkbox" id="seminario" name="seminario">
                        Seminário
                    </label>
                    <label for="mesa">
                        <input type="checkbox" id="mesa" name="mesa">
                        Mesa-redonda
                    </label>
                    <label for="encontro">
                        <input type="checkbox" id="encontro" name="encontro">
                    Encontro
                    </label>
                    <label for="painel">
                        <input type="checkbox" id="painel" name="painel">
                        Painel
                    </label>
                    <label for="forum">
                        <input type="checkbox" id="forum" name="forum">
                        Fórum
                    </label>
                    <label for="conferencia">
                        <input type="checkbox" id="conferencia" name="conferencia">
                        Conferência
                    </label>
                    <label for="jornada">
                        <input type="checkbox" id="jornada" name="jornada">
                        Jornada
                    </label>
                    <label for="workshop">
                        <input type="checkbox" id="workshop" name="workshop">
                        Workshop
                    </label>
                    <label for="coloquio">
                        <input type="checkbox" id="coloquio" name="coloquio">
                        Colóquio
                    </label>
                    <label for="cursos">
                        <input type="checkbox" id="cursos" name="cursos">
                        Cursos
                    </label>
                    <label for="semana">
                        <input type="checkbox" id="semana" name="semana">
                        Semana
                    </label>
            </form>
        </div>
        <div class="cards">
            <div class="evento">
                <a href="evento.php"><p class="nome_evento">BSD Day</p></a>
                <p class="nome_cadastrador">RIZZO, Nilton José;</p>
                <p class="descricao_evento">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor velit, tempor at felis sit amet, pretium maximus augue. In fermentum, ligula ac pharetra</p>
            </div>
            <div class="evento">
                <a href="evento.php"><p class="nome_evento">Nome do Evento</p></a>
                <p class="nome_cadastrador">Nome do Cadastrador;</p>
                <p class="descricao_evento">(Descrição)</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>