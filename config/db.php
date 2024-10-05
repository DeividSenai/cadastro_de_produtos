<?php
// config/db.php

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "MarLOON";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
