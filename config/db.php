<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "intranet_chat";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
