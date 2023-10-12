<?php
$host = 'localhost';
$usuario = 'root';
$senha = '92526671';
$banco = 'fastpayclientes';

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}
?>

