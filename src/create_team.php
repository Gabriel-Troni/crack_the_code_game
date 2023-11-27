<?php
require './conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();

    $nomeEquipe = $_POST["nomeEquipe"];
    $password = sha1($_POST["senhaEquipe"]); 

    $sql = "INSERT INTO equipes (idEquipe, nomeEquipe, senhaEquipe, admin) VALUES (DEFAULT, '$nomeEquipe', '$password', ".$_SESSION['cc_user'].")";
    $result = $conn->query($sql);
    $idEquipe = $conn->insert_id;
    if ($result) {
        $changeTeam = $conn->query("UPDATE users SET equipe = '$idEquipe' WHERE idUser = ".$_SESSION['cc_user']."");
        $conn->close();
        echo "<script>window.location.href='../equipe.php'</script>"; 
    } else {
        $conn->close();
        echo "<script>window.location.href='../equipe.php?error=1'</script>"; 
    }

   
}
echo "<script>window.location.href='../equipe.php'</script>";



?>

