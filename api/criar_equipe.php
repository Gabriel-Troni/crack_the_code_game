<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
require __DIR__ . '/src/conn.php';

$nomeEquipe = $_POST["nomeEquipe"];
$senhaEquipe = sha1($_POST["senhaEquipe"]);

$sql = "INSERT INTO equipes (nomeEquipe, senhaEquipe) VALUES ('$nomeEquipe', '$senhaEquipe')";
$result = $conn->query($sql);
if ($result) {
    session_start();
    $_SESSION['cc_equipe'] = $conn->insert_id;
   
    echo "<script>window.location.href='equipe.php'</script>"; 
} else {
    echo "<script>window.location.href='criar_equipe.php'</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="stylesheet" type="text/css" href="/styles/equipe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php require __DIR__ . '/src/navbar.php';

    if(isset($_GET['error'])){
        echo "<script>alert('Criação de equipe falhou, tente novamente!')</script>";
    }
    ?>
    <a id="voltar" href="equipe.php">Voltar</a>
    <div class="container">
        <div class="menu">
            <h1 class="title">Criar Equipe</h1> 
        </div>

        <div class="container team-form">
            <form action="src/create_team.php" method="POST" class="team-form" id="team-form">
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