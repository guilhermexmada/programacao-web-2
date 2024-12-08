<?php
session_start();
//include 'php/autenticacao.php';

$acao = 'cadastrar';
    if(isset($_GET['e'])){
        $acao = 'editar';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadstro de funcionários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>

    <!--Menu-->
    <?php 
        include 'componentes/menu.php';
    ?>
    <!--------------------------------------------------------------------->

        <h2>Cadastro de funcionários</h2>

        <form action="php/procFunc.php?acao=<?php echo $acao; ?>" method="post">
        <?php
            if(isset($_GET['e'])){
                echo 
                '
                <label for="id">ID:</label><br>
                <input type="text" id="id" name="id"><br>
                ';
            }
        ?>
            

            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco"><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf"><br><br>

            <input type="submit" value="Enviar">
        </form>

    </body>
</html>
