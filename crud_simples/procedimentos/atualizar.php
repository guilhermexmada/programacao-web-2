<?php 
include '../conexao.php';

//capturando id passado pela url para parâmetro da edição 
$id = $_GET['id'];
$novoNome = $_GET['novoNome'];
$novaSenha = $_GET['novaSenha'];
//comando sql para editar
$sql = "UPDATE usuarios SET nome = '$novoNome', senha = '$novaSenha' WHERE id='$id'";
//executando consulta com a variável sql
$conexao->query($sql);

header('Location: ../index.php');