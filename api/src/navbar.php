<?php die('O caminho de ida deu certo!') ?>
<style>
    .user-welcome{
        color: #149414;
        font-family: 'Press Start 2P', monospace;
    }
</style>

<header>
        <a href="/api/leaderboard.php"> Leaderboard </a>
        <a href="/api/equipe.php"> Equipes </a>
        <a href="/api/index.php"> Jogar </a>
        <a href="/api/src/logout.php"> Sair </a>
        <?php
        require '/api/src/Information.php';
        require '/api/src/conn.php';
        session_start();

        if (empty($_SESSION['cc_user'])) {
            echo "<script>window.location.href='/api/login.php'</script>"
            ?>
            <a href="/api/login.php"> Entrar </a>
            <a href="/api/register.php"> Cadastrar-se </a>
            <?php
        }

        
        $userInfo = new Information;
        $resultUser = $userInfo->getUsers($conn,$_SESSION['cc_user']);
        
        ?>

        <p class="user-welcome">Bem-vindo <?=$resultUser['nomeUser']?></p>
</header>