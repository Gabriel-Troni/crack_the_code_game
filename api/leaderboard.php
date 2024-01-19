<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/styles/leaderboard.css">
</head>
<?php
require '/api/src/Information.php';
require '/api/src/conn.php';
$info = new Information();
$teams = $info->getTeamsPoints($conn);
?>
<body>
    <a id="voltar" href="./index.php">voltar</a>
    <h1>ranking das equipes</h1>
    <div id="quadrado">
        <ul class="rank-list">

            <?php
        $html = "";
        $rank = 1;
        foreach ($teams as $team) {
            $html .= "
            <li class='rank-item'>
                <div class='team-container'>
                    <div class='team-rank'>
                        <h3>".$rank."</h3>
                    </div>
                    <div class='team-info'>
                        <h3>".$team['nomeEquipe'].":</h3>
                        <h4>".$team['PTS']." pontos</h4>
                    </div>
                </div>
            </li>    
            ";
            
            $rank++;    
        }
        echo $html;
        
        
        ?>
        </ul>
    </div>
</body>

</html>