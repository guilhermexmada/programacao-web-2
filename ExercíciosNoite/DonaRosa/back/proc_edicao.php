<?php 
    include "conexao.php";

    $email = $_POST['email'];
    $novoNome = $_POST['novoNome'];
    $novoSenha = $_POST['novaSenha'];

    $sql = "UPDATE clientes SET nome = '$novoNome', senha = '$novoSenha' WHERE email = '$email';";

    $conexao->query($sql);
    $conexao->close();

    header('Location: ../pages/lista.php');
?>