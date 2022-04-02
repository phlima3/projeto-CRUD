<?php


$valor = $_GET ["nome"];
echo $valor; 

$servername = "localhost";
$username = "root";
$password = "minas";

$conn = new mysqli($servername, $username, $password);
    if ($conn ->connect_error) {
        die("Falha na conexão!" . $conn->connect_error);
    }
    echo "Conectado com Sucesso";
?>