<style>
    .user-welcome{
        color: #149414;
        font-family: 'Press Start 2P', monospace;
    }
</style>

<header>
        <a href="../leaderboard.php"> Leaderboard </a>
        <a href="../equipe.php"> Equipes </a>
        <a href="../index.php"> Jogar </a>
        <?php
        require __DIR__ . '/Information.php';
        require __DIR__ . '/conn.php';
        
        if (empty($_SESSION['cc_user'])) {
            echo "<a href='../login.php'> Entrar </a>";
            echo "<a href='../register.php'> Cadastrar-se </a>";
        } else {
            echo "<a href='logout.php'> Sair </a>";
            $userInfo = new Information;
            $resultUser = $userInfo->getUsers($conn,$_SESSION['cc_user']);
            echo "<p class='user-welcome'>Bem-vindo " . $resultUser['nomeUser'] . "</p>";
        }
        ?>

</header>