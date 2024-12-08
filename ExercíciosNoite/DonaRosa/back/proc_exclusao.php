<?php 
    include "conexao.php";

    $email = $_GET['arroba'];

    $sql = "DELETE FROM clientes WHERE email = '$email';";
    $conexao->query($sql);
    $conexao->close();

    header('Location: ../pages/lista.php');



