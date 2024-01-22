<?php
require __DIR__ . '/conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['user']) && isset($_POST['equipe'])){
        $leaveTeam = $conn->query("UPDATE users SET equipe = NULL WHERE idUser = ".$_POST['user']."");
        $conn->close();
    }
    
}
?>