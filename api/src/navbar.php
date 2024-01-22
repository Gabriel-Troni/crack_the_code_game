<style>
    .user-welcome{
        color: #149414;
        font-family: 'Press Start 2P', monospace;
    }
</style>

<header>
        <a href="/var/task/user/api/leaderboard.php"> Leaderboard </a>
        <a href="/var/task/user/api/equipe.php"> Equipes </a>
        <a href="/var/task/user/api/index.php"> Jogar </a>
        <?php
        require __DIR__ . '/Information.php';
        require __DIR__ . '/conn.php';
        
        if (empty($_SESSION['cc_user'])) {
            echo "<a href='/var/task/user/api/login.php'> Entrar </a>";
            echo "<a href='/var/task/user/api/register.php'> Cadastrar-se </a>";
        } else {
            echo "<a href='/var/task/user/api/src/logout.php'> Sair </a>";
            $userInfo = new Information;
            $resultUser = $userInfo->getUsers($conn,$_SESSION['cc_user']);
            echo "<p class='user-welcome'>Bem-vindo " . $resultUser['nomeUser'] . "</p>";
        }
        ?>

</header>