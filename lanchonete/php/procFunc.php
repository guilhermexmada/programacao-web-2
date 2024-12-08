<?php
include 'conexao.php';
session_start();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

if($_GET['acao'] == 'cadastrar'){
    
    $sql = "INSERT INTO funcionarios (nome_funcionario, cpf_funcionario, telefone_funcionario, endereco_funcionario) VALUES ('$nome', '$cpf', '$telefone', '$endereco')";
    
    if($conexao->query($sql) === TRUE){
        $_SESSION['cadastro_realizado'] = true;
        header('Location: ../paginas/listarFuncionarios.php');
        $conexao->close();
    }

}

if($_GET['acao'] == 'excluir'){
    $id = $_GET['id'];

    $sql = "DELETE FROM funcionarios WHERE id_funcionario='$id'";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['excluir_funcionario'] = true;
        header("Location: ../paginas/listarFuncionarios.php");
    }
}

if($_GET['acao'] == 'editar'){
    $id = $_POST['id'];
    $sql = "UPDATE funcionarios SET nome_funcionario='$nome', cpf_funcionario='$cpf', telefone_funcionario='$telefone', endereco_funcionario='$endereco' WHERE id_funcionario='$id'";

    $resultado = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao)){
            $_SESSION['edicao_ok'] = true;
            header('Location: ../paginas/listarFuncionarios.php');
        }else{
            $_SESSION['edicao_erro'] = true;
            header('Location: ../paginas/listarFuncionarios.php');
        }

}
