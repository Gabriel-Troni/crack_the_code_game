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

    <?php require './src/navbar.php'?>
    <a id="voltar" href="equipe.php">Voltar</a>
    <div class="container">
        <div class="menu">
            <h1 class="title">Criar Equipe</h1>
           
            
                
            
        </div>

        <div>
            <form action="" method="POST" id="team-form">
                <div class="input-container">
                    <label for="nomeEquipe">Nome</label>
                    <input type="text" name="nomeEquipe" value="">
                </div>
                <div class="input-container">
                    <label for="senhaEquipe">Senha Equipe</label>
                    <input type="password" name="senhaEquipe" value="">
                </div>

                <button class="btn">Confirmar</button>             
            </form>
        </div>
    </div>
</body>

</html>