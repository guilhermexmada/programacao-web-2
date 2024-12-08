<?php
include "conn.php";

$nome = $_POST['nome'];
$quant = $_POST['quant'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos (nome_produto, quantidade_produto, valor_produto) values ('$nome','$quant','$preco');";
$conexao->query($sql);
header("Location: index.php");
?>