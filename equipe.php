<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="stylesheet" type="text/css" href="./equipe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php require './src/navbar.php';
    
    var_dump($resultUser);
    
    
    ?>
    <a id="voltar" href="index.php">Voltar</a>
    <div class="container">
        <div class="menu">
            <h1 class="title">Equipes</h1>
           
            
                
            <a class="btn" href="criar_equipe.php">Criar Equipe</a>
        </div>

        <?php
        if(!empty($resultUser['equipe'])){
        ?>
        <div>

        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>