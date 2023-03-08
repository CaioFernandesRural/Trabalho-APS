<header class="container">
    <a href="/home.php" class="logo">
        <div>
            <h3>Alexandria</h3>
        </div>
    </a>
    <label id="pesquisa">
        <input type="text" id="barra_pesquisa" placeholder="Buscar">
        <img src="../assets/img/icon_lupa.png" id="icon_lupa">
    </label>
    <a href="/login.php"><img src="../assets/img/icon_person.png" id="icon_person"></a>
    <!-- Logado
    <img src="../../public/assets/img/logout.png" id="icon_logout">
-->
</header>
<?php
if ($_SESSION['user']->tipo_usuario == 'comum'):
    ?>
    <nav>
        <a href="meus_eventos.php">Meus eventos</a>
    </nav>

<?php endif ?>
<?php
if ($_SESSION['user']->tipo_usuario == 'cad'):
    ?>
    <nav>
        <a href="meus_eventos.php">Meus Eventos</a>
    </nav>
<?php endif ?>

<?php
if ($_SESSION['user']->tipo_usuario == 'adm'):
    ?>
    <nav>
        <a href="autorizacoes_pendentes.php">Autorizações Pendentes</a>
    </nav>

<?php endif ?>