<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="stylesheet" type="text/css" href="/styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php require '/api/src/navbar.php' ?>
    <div id="conteudo">

        <div class="bouncing-text">
            <div class="c">C</div>
            <div class="r">R</div>
            <div class="a">A</div>
            <div class="c2">C</div>
            <div class="k">K</div>
            <div class="space"></div>
            <div class="t">T</div>
            <div class="h">H</div>
            <div class="e">E</div>
            <div class="space"></div>
            <div class="c3">C</div>
            <div class="o">O</div>
            <div class="d">D</div>
            <div class="e2">E</div>
        </div>
        <div class="dispontos" style="color: #149414; font-family: 'Press Start 2P', monospace;">
            <h2 id="pon">Pontos: <span class="points-display">0</span></h2>
        </div>

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
            <input id="comando" type="text" placeholder="$">
        </div>
    </div>
    <div id="cod11"></div>
    <script src="generator.js"></script>

</body>

</html>