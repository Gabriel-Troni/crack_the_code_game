<?php
require './conn.php';


// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nomeUser = $_POST["user"];
    $email = $_POST["email"];
    $password = sha1($_POST["senha"]); // Hash da senha para segurança

    // Inserir dados na tabela 'users'
    $sql = "INSERT INTO users (nomeUser, email, password) VALUES ('$nomeUser', '$email', '$password')";
    $result = $conn->query($sql);
    if ($result) {
        session_start();
        $_SESSION['cc_user'] = $conn->insert_id;
       
        echo "<script>window.location.href='../index.php'</script>"; 
    } else {
        echo "<script>window.location.href='../register.php'</script>"; 
    }

   
}



?>