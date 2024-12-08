<?php 

include '../conexao.php';

//recupera id passado pela url em uma variavel
$id = $_GET['id'];

//comando sql para deletar dados da tabela
$sql = "DELETE FROM usuarios WHERE id = '$id'";

//executa instrução sql na variável
$conexao->query($sql);

//redireciona para a página inicial após exclusão
header('Location: ../index.php');