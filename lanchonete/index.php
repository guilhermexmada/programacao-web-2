<?php 

if($_GET['url'] == 'home'){
    include "paginas/home.php";
}
elseif($_GET['url'] == 'cadastro'){
    include 'paginas/cadFunc.php';
}
elseif($_GET['url'] == 'contato'){
    include 'paginas/contatos.php';
}
elseif($_GET['url'] == 'listar'){
    include 'paginas/listarFuncionarios.php';
}
elseif($_GET['url'] == 'sobre'){
    include 'paginas/sobre.php';
}
elseif(!isset($_GET['url'])){
    header('Location: home');
}
else{
    include 'paginas/erro.html';
}

//cadFunc.php == cadastro
//contato.php == contato
//listarFuncionarios.php == listar
//sobre.php == sobre
?>