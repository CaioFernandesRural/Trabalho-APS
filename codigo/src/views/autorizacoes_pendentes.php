<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/autorizacoes_pendentes.css"/>
    <title>Alexandria</title>
</head>
<body>
    <div class="container">

        <h1 id="h1_autoriza">Autorizações Pendentes</h1>
        <div id="titulo_decisao">
            <span>Eventos Pendentes</span>
        </div>
            <div class="cards">
                <div class="decisao">
                    <div class="evento">
                        <a href=""><p class="nome_evento">BSD Day</p></a>
                        <p class="nome_cadastrador">RIZZO, Nilton José;</p>
                        <p class="descricao_evento">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor velit, tempor at felis sit amet, pretium maximus augue. In fermentum, ligula ac pharetra</p>
                    </div>
                    <div class="container_botoes">
                        <button type="button" class="autorizacao" id="aceita_evento1"><img class="icon_button" src="../../../public/assets/img/autoriza.svg" title="Autorizar"></button>
                        <button type="button" class="autorizacao" id="rejeita_evento1"><img class="icon_button" src="../../../public/assets/img/rejeita.svg" title="Rejeitar"></button>
                    </div>
                </div>
                <div class="decisao">
                    <div class="evento">
                        <a href=""><p class="nome_evento">Nome do Evento</p></a>
                        <p class="nome_cadastrador">Nome do Cadastrador;</p>
                        <p class="descricao_evento">(Descrição)</p>
                    </div>
                    <div class="container_botoes">
                        <button type="button" class="autorizacao" id="aceita_evento2"><img class="icon_button" src="../../../public/assets/img/autoriza.svg"></button>
                        <button type="button" class="autorizacao" id="rejeita_evento2"><img class="icon_button" src="../../../public/assets/img/rejeita.svg"></button>
                    </div>
            </div>
    </div>
</div>
</body>
<?php
    require_once "../template/footer.php";
    ?>
</html>