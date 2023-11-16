<?php
require './conn.php';

$result = $conn->query("SELECT * FROM users WHERE nomeUser = ".$_POST['user']." AND password = ".sha1($_POST['senha'])."");
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['cc_user'] = $result['idUser'];
    echo "<script>window.location.href='../index.php'</script>";
} else {
    echo "<script>window.location.href='../login.php'</script>";
}
?>