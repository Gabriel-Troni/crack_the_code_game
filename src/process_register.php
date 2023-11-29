<?php

require './conn.php';
require './checkform.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nomeUser = sanitize($conn, $_POST["user"]);
    $email = sanitize($conn, $_POST["email"]);
    $password = sha1(sanitize($conn, $_POST["senha"]));

    $sql_email = "SELECT * FROM users WHERE email = '$email'";
    $result_email = $conn->query($sql_email);

    if ($result_email->num_rows > 0) {
        echo "<script>
            alert('O e-mail já está sendo utilizado.');
            window.location.href='../register.php'
        </script>";
    } else {
        $sql = "INSERT INTO users (nomeUser, email, password) VALUES ('$nomeUser', '$email', '$password')";
        $result = $conn->query($sql);
        if ($result) {
            session_start();
            $_SESSION['cc_user'] = $conn->insert_id;

            echo "<script>window.location.href='../index.php'</script>";
        } else {
            echo "<script>
                    alert('Ocorreu um erro ao criar o usuário, tente novamente.');
                    window.location.href='../register.php'
                </script>";
        }
    }
}
echo "<script>window.location.href='../register.php'</script>";
?>