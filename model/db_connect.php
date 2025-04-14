<?php

$host = "localhost";
$bd = "cube";
$user = "root";
$senha = "usbw";

// Criando objeto mysqli para conectar ao banco
$mysqli = new mysqli($host, $user, $senha, $bd);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;    
}

?>