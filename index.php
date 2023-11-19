<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <a href="leaderboard.php"> Leaderboard </a>
        <?php
        session_start();
        if (empty($_SESSION['cc_user'])) {

            ?>
            <a href="login.php"> Entrar </a>
            <a href="register.php"> Cadastrar-se </a>
            <?php
        }
        ?>
    </header>

    <div id="conteudo">

        <h1 style="margin-bottom: 5px;">CRACK THE CODE</h1>
        <div id="terminal">
            <div id="codigos">
                <div class="textos" id="cod10"></div>
                <div class="textos" id="cod9"></div>
                <div class="textos" id="cod8"></div>
                <div class="textos" id="cod7"></div>
                <div class="textos" id="cod6"></div>
                <div class="textos" id="cod5"></div>
                <div class="textos" id="cod4"></div>
                <div class="textos" id="cod3"></div>
                <div class="textos" id="cod2"></div>
                <div class="textos" id="cod1"></div>
            </div>
            <input id="comando" type="text" value="texto" placeholder="$">
        </div>
    </div>
    <script src="generator.js"></script>
</body>

</html>