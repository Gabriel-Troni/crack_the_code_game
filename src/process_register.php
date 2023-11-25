<?php
require './conn.php';
require './checkform.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nomeUser = sanitize($conn, $_POST["user"]);
    $email = sanitize($conn, $_POST["email"]);
    $password = sha1(sanitize($conn, $_POST["senha"])); 

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