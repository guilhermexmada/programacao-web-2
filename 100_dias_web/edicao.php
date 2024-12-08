<?php

include "conn.php";

$id = $_POST['id'];
$novo_nome = $_POST['n_nome'];
$novo_quantidade = $_POST['n_quant'];
$novo_preco = $_POST['n_preco'];

$sql = "UPDATE produtos SET nome_produto = '$novo_nome', quantidade_produto = '$novo_quantidade', valor_produto = '$novo_preco' WHERE id_produto = '$id';";
$conexao->query($sql);

header("Location: index.php");