<?php 
    include 'conexao.php';

    //iniciando sessão para guardar informação que o usuário logou no site
    session_start();

    //criando variáveis para senha e login e usando funções de segurança
    //mysqli realescapestring desconsidera comandos SQL e requer parâmetro do banco e do atributo 
    $usuario = mysqli_real_escape_string($conexao, $_POST['login']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    //consulta no banco para verificar a quantidade de usuários
    //onde o usuario e a senha são iguais 
    $sql = "SELECT COUNT(usuario_login) FROM login WHERE usuario_login = '$usuario' AND senha_login = '$senha'";

    //variável que guarda o resultado da consulta anterior
    //requer parâmetro do banco e da consulta
    $result = mysqli_query($conexao, $sql);

    //variável que guarda o retorno da consulta
    $row = mysqli_fetch_assoc($result);

    //verificando se a consulta retornou pelo menos uma linha
    //se linha recebeu pelo menos 1 resultado, retorna para home
    //se linha não recebeu nada, retorna para tela de login
    if($row['COUNT(usuario_login)'] == 1){
       $_SESSION['usuario_logado'] = strtoupper($usuario);
       header('Location: ../home');
    }
    else{
        $_SESSION['usuario_invalido'] = true;
       header('Location:../paginas/login.php');
    }
?>