

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <form action="procedimentos/cadastrar.php" method="get">
        <input type="text" name="nome" placeholder="Nome">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit"></button>
    </form>

    <hr>

    <h1>Listar</h1>
    <?php 
        include 'conexao.php';
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexao, $sql);  

        echo 
        "
        <table>
          <tr>
            <th>ID</td>
            <th>Usuário</td>
            <th>Senha</td>
            <th colspan=2>Ação</td>
          </tr>

        ";
        //fetchassoc pega os dados da consulta
        //laço de repetição cria linha para cada dado
        //id retornado na url como parâmetro para exclusão da conta
        while($linha = mysqli_fetch_assoc($resultado)){
            echo
            "
            <tr>
                <td>".$linha['id']."</td>
                <td>".$linha['nome']."</td>
                <td>".$linha['senha']."</td>
                <td><a href='edicao.php?id={$linha['id']}'>editar</a></td>
                <td><a href='procedimentos/deletar.php?id={$linha['id']}'>deletar</a></td>
            </tr>
            ";
        };
        
        echo "</table>";
    ?>
    
</body>
</html>