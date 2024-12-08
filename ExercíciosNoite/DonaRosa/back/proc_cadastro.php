<?php
session_start();
include "conexao.php";

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);

$sql = "INSERT INTO clientes (nome, senha, email) VALUES ('$nome', '$senha', '$email');";

$conexao->query($sql);
$conexao->close();

header('Location: ../pages/lista.php');

?>