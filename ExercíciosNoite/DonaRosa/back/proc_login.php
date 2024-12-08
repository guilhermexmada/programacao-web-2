<?php 
    include 'conexao.php';
    session_start();

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

   
    $sql = "SELECT COUNT(nome) FROM clientes WHERE email = '$email' AND senha = '$senha'";

    $result = mysqli_query($conexao, $sql);
   

    $row = mysqli_fetch_assoc($result);

    if($row['COUNT(nome)'] == 1){
        $_SESSION["log"] = true;
        $_SESSION["e"] = $_POST['email'];
        header('Location: ../pages/lista.php');
    }
    else{
        $_SESSION['notLog'] = true;
        header('Location: ../pages/lista.php?erro=erro');
    }
    $conexao->close();
?>