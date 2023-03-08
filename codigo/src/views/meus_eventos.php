
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/meus_eventos.css" />
    <title>Alexandria</title>
</head>

<body>
    <div class="container">

        <h1 id="h1_edita">Meus Eventos</h1>
        <a href="/cadastro_evento.php"><button class="btn_criar_novo">Criar Evento</button></a>
        <div id="titulo_editar">
        </div>
        <div class="visualiza_eventos">
            <div class="cards">
                <?php foreach($eventos as $evento) :?>
                    <div class="evento">
                        <a href="evento.php">
                            <p class="nome_evento"><?= $evento->nome ?></p>
                        </a>
                        <span>Tema 1</span>
                        <ul>
                            <li>Artigo 1</li>
                            <li><a href="cadastro_artigo.php?editar=true"><button type="button" class="autorizacao" id="edita_artigo1_tema1_evento1"><img class="icon_button" src="/assets/img/lapis.svg" title="Autorizar"></button></a>
                            <button type="button" class="autorizacao" id="deleta_artigo1_tema1_evento1"><img class="icon_button" src="/assets/img/deleta.svg" title="deletar"></button></li>
                        </ul>
                    </div>
                    <div class="container_botoes">
                        <a href="/cadastro_evento.php"><button type="button" class="autorizacao"
                                id="edita_evento1_evento1"><img class="icon_button"
                                    src="/assets/img/lapis.svg"></button></a>
                        <button type="button" class="autorizacao" id="deleta_evento1_evento1"><img class="icon_button"
                                src="/assets/img/deleta.svg"></button>
                    </div>
                <?php endforeach ?>
        </div>
    </div>
</body>

</html>