<?php
include 'db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$insere = mysqli_query($conexao, "INSERT INTO usuarios (USUARIO, SENHA) VALUES ('$usuario', '$senha')");

header('location:login.php');