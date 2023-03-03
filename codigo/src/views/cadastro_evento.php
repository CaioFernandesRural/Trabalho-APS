<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <title>Alexandria</title>
</head>
<body>
    <div class="container">

        <p class="titulo_cadastro">Dados do Evento</p>
        <div class="cadastro">
            <form>
                <div class="form_container">
                    <div class="div_form">
                        <label for="nome_evento">Nome</label>
                        <input type="text" name="nome_evento" id="nome_evento">
                        <br>
                        <label for="edicao">Edição</label>
                        <input type="text" name="edicao" id="edicao">
                        <br>
                        <label for="link_evento">Link do Evento</label>
                    <input type="url" id="link_evento" name="link_evento">
                    <br>
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo">
                        <option value="tipo_1">Tipo 1</option>
                        <option value="tipo_2">Tipo 2</option>
                    </select>
                </div>
                <div class="div_form">
                    <!--<label for="email_resp">E-mail do Responsável</label>
                    <input type="email" id="email_resp" name="email_resp">
                    <br>-->
                    <label for="area">Área de Estudo</label>
                    <input type="text" id="area" name="area">
                    <br>
                    <label for="descricao_evento">Descrição Sucinta</label>
                    <input type="text" id="descricao_evento" name="descricao_evento">
                </div>    
            </div>
        </form>
    </div>    
    <button class="btn_cancela">Cancelar</button>
    <button class="btn_salva">Enviar</button>
</div>
</body>
</html>