<?php
$db_ca      = $_ENV["PLANETSCALE_SSL_CERT_PATH"];
$server     = $_ENV["PLANETSCALE_DB_HOST"];
$user       = $_ENV["PLANETSCALE_DB_USERNAME"];
$password   = $_ENV["PLANETSCALE_DB_PASSWORD"];
$db         = $_ENV["PLANETSCALE_DB"];

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $db_ca, NULL, NULL);
mysqli_real_connect($conn, $server, $user, $password, $db, NULL, NULL, MYSQLI_CLIENT_SSL);
?>
