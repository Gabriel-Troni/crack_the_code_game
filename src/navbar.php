<style>
    .user-welcome{
        color: #149414;
        font-family: 'Press Start 2P', monospace;
    }
</style>

<header>
        <a href="leaderboard.php"> Leaderboard </a>
        <a href="equipe.php"> Equipes </a>
        <a href="index.php"> Jogar </a>
        <a href="./src/logout.php"> Sair </a>
        <?php
        require './src/Information.php';
        require './src/conn.php';
        session_start();

        if (empty($_SESSION['cc_user'])) {
            echo "<script>window.location.href='./login.php'</script>"
            ?>
            <a href="login.php"> Entrar </a>
            <a href="register.php"> Cadastrar-se </a>
            <?php
        }

        
        $userInfo = new Information;
        $resultUser = $userInfo->getUsers($conn,$_SESSION['cc_user']);
        
        ?>

        <p class="user-welcome">Bem-vindo <?=$resultUser['nomeUser']?></p>
</header>