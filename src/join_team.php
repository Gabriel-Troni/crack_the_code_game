<?php
require './conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user']) && isset($_POST['team']) && isset($_POST['teampass'])){
        $sql = "SELECT * FROM equipes WHERE idEquipe = ".$_POST['team']." AND senhaEquipe = '".sha1($_POST['teampass'])."'";
        $selectTeam = $conn->query($sql);
        if($selectTeam->num_rows > 0){
            $updateUser = $conn->query("UPDATE users SET equipe = ".$_POST['team']." WHERE idUser=".$_POST['user']."");
        }
        $conn->close();
        echo "<script>window.location.href='../equipe.php'</script>";
    } 
}
echo "<script>window.location.href='../equipe.php'</script>";
?>