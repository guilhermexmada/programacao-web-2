<?php 
    //verificando se a variável o usuário está logado ou não por variável de sessão
    if(!$_SESSION['usuario_logado']){
        header('Location: paginas/login.php');
    }
?>