<?php
    session_start();
    //include 'php/autenticacao.php';
    include 'php/conexao.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!--Menu-->
    <?php 
        include 'componentes/menu.php';
    ?>
    <!--------------------------------------------------------------------->


        <img src="imgs/imagem_lanchonete.png" width="500px">


        <?php 
        include 'componentes/rodape.php';
    ?>
</body>
</html>