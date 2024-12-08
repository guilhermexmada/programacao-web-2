
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>




<?php
 include 'componentes/menu.php';
include 'php/conexao.php';
session_start();
//include 'php/autenticacao.php';


$sql = "SELECT * FROM funcionarios";

$resultado = mysqli_query($conexao, $sql);

echo "
<table border='1px' width='500px'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <td>Ação</td>
    </tr>
";

while($linha = mysqli_fetch_assoc($resultado)){
    echo "
        <tr>
            <td>".$linha['id_funcionario']."</td>
            <td>".$linha['nome_funcionario']."</td>
            <td>".$linha['cpf_funcionario']."</td>
            <td>".$linha['telefone_funcionario']."</td> 
            <td>".$linha['endereco_funcionario']."</td>
            <td>
            <a href='cadFunc.php?e=1&id=".$linha['id_funcionario']."'>Editar</a> - 
            <a href='../php/procFunc.php?acao=excluir&id=".$linha['id_funcionario']."'>Excluir</a>
            </td>
        </tr>
    ";
}

echo "</table>";

if(isset($_SESSION['excluir_funcionario'])){
    echo "Registro excluido com sucesso!";
}
unset($_SESSION['excluir_funcionario']);

?>
 <?php 
        include 'componentes/rodape.php';
    ?>
</body>
</html>




