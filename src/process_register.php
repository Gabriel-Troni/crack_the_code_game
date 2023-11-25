<?php
require './conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nomeUser = $_POST["user"];
    $email = $_POST["email"];
    $password = sha1($_POST["senha"]); 

    $sql = "INSERT INTO users (nomeUser, email, password, points) VALUES ('$nomeUser', '$email', '$password', 0)";
    $result = $conn->query($sql);
    if ($result) {
        session_start();
        $_SESSION['cc_user'] = $conn->insert_id;
       
        echo "<script>window.location.href='../index.php'</script>"; 
    } else {
        echo "<script>window.location.href='../register.php'</script>"; 
    }

   
}
echo "<script>window.location.href='../register.php'</script>";



?>