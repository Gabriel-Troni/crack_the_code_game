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
    <?php require __DIR__ . '/src/navbar.php'; ?>
    <a id="voltar" href="index.php">Voltar</a>
    <div class="container">
        <div class="menu">
            <h1 class="title">Equipes</h1>  
            <a class="btn" href="criar_equipe.php">Criar Equipe</a>
        </div>

        <?php
        if(!empty($resultUser['equipe'])){
            $userTeam = $userInfo->getTeams($conn,$resultUser['equipe']);
            $userTeamPoints = $userInfo->getTeamsPoints($conn, $resultUser['equipe']);
        ?>
            <form action="src/leave_team.php" method="POST" class="team-container" id="team-container">
                <h1>Sua Equipe</h1>
                <div class="details-container">
                    <div class="team-detail">
                        Equipe: <?=$userTeam['nomeEquipe']?>
                    </div>
                    <div class="team-detail">
                        Pontos: <?=$userTeamPoints['PTS']?>
                    </div>
                    
                        <input type="hidden" id="user" value="<?=$_SESSION['cc_user']?>">
                        <input type="hidden" id="equipe" value="<?=$resultUser['equipe']?>">
                        <button type="submit" class="leave-btn" id="leave-btn">Sair</button>          
                    </div> 
                </form>
                <?php
        }
        $allTeams = $userInfo->getTeams($conn);
        ?>

        <div>
            <ul class="rank-list">
            <?php
                $html = "";
                foreach ($allTeams as $team) {
                    if($team['idEquipe'] != $resultUser['equipe']){

                    
                $html .= "
                <li class='rank-item'>
                    <div class='team-container-join'>
                        <div class='team-info'>
                            <h3>".$team['nomeEquipe']."</h3>
                        </div>
                        <div class='team-info'>
                            <form method='POST' action='src/join_team.php'>
                                <label for='teampass'>Senha</label>

                                <input type='hidden' name='user' value=".$_SESSION['cc_user'].">
                                <input type='hidden' name='team' value=".$team['idEquipe'].">
                                <input type='password' name='teampass' value=''>
                                <button type='submit' class='btn'>Entrar</button>

                            </form>
                        </div>
                    </div>
                </li>    
                ";
            }
                }
                echo $html;
            ?>
            </ul>
        </div>
    </div>
    <script>
        document.getElementById('team-container').addEventListener('submit',(evt)=>{
            evt.preventDefault();
            const user = document.getElementById('user').value
            const equipe = document.getElementById('equipe').value

            const sendData = new FormData();

            sendData.append('user',user);
            sendData.append('equipe',equipe);
            if(confirm('Deseja sair da equipe?')){

                fetch(__DIR__ . '/src/leave_team.php', {
                    method: "POST", 
                    body: sendData, 
                }).then((res)=>
                    res.text()
                 ).then((res)=> {window.location.reload()});
            }
        })
    </script>
</body>

</html>