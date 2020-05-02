<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db) or die (mysql_error("erro ao conectar ao banco"));


