<?php

session_start();
include "conexao.php";

$idComprador = mysqli_escape_string($conexao, $_POST['id']);
$produto = mysqli_real_escape_string($conexao, $_POST['produto']);
$quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);
$preco = mysqli_real_escape_string($conexao, $_POST['preco']);

$sql = "INSERT INTO vendas (id_cliente, produto, quantidade, preco) VALUES ($idComprador,'$produto',$quantidade,$preco)";

$conexao->query($sql);
$conexao->close();

header('Location: ../pages/lista.php');