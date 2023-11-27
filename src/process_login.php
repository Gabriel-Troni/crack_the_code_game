<?php

require './conn.php';
require './checkform.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = sanitize($conn, $_POST['user']);
    $password = sanitize($conn, $_POST['senha']); 

    $stmt = $conn->prepare("SELECT * FROM users WHERE nomeUser = ? AND password = SHA1(?)");
    $stmt->bind_param("ss", $user, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $userData = $result->fetch_assoc();
        $_SESSION['cc_user'] = $userData['idUser'];
        header("Location: ../index.php");
        exit;
    } else {
        echo "<script>
            alert('Usuario ou senha incorretos.');
            window.location.href='../login.php'
        </script>";
        exit;
    }
}
header("Location: ../login.php");
exit;
?>