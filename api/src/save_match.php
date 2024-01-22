<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require __DIR__ . '/conn.php';

    session_start();
    $user = $_SESSION['cc_email'];
    $points = $_POST['points'];

    $sql = "INSERT INTO `partidas`(`email`, `data`, `points`) VALUES ('$user', current_timestamp() ,$points)";
    $saveMatch = $conn->query($sql);
    $conn->close(); 
}
echo "<script>window.location.href='logout.php'</script>";
?>