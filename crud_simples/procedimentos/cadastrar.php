<?php
//inclui página de conexão com banco
include '../conexao.php';
//captura valores dos inputs em variáveis
//junto com função de proteção
$nome = mysqli_real_escape_string($conexao,$_GET['nome']);
$senha = mysqli_real_escape_string($conexao,$_GET['senha']);
//variavel com comando de inserção no banco
$sql = "INSERT INTO usuarios (nome,senha) VALUES ('$nome', '$senha');";
//executa a consulta da variável de inserção
$conexao->query($sql);
//encerra conexão com o banco
$conexao->close();
//redireciona para a página do formulário
header('Location: ../index.php');
