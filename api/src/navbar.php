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
        require __DIR__ . '/Information.php';
        require __DIR__ . '/conn.php';

        if (empty($_SESSION['cc_user'])) {
            //echo "<script>window.location.href= ' . __DIR__ . '/../login.php'</script>"
            echo "<a href='/api/login.php'> Entrar </a>";
            echo "<a href='/api/register.php'> Cadastrar-se </a>";
        } else {
            $userInfo = new Information;
            $resultUser = $userInfo->getUsers($conn,$_SESSION['cc_user']);
            echo "<p class='user-welcome'>Bem-vindo $resultUser['nomeUser']</p>";
        }
        ?>

</header>