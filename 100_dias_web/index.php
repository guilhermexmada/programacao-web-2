<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecânica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="cadastro.php" method="post">
    <h1>Cadastro de Produtos</h1>
    <label>Nome do produto:</label>
    <input type="text" name="nome">
    <label>Quantidade:</label>
    <input type="number" name="quant">
    <label>Preço:</label>
    <input type="number" name="preco">
    <button type="submit">Cadastrar Produto</button>
    </form>
    <h1>Lista de produtos</h1>
    <?php
        include "lista.php";
    ?>
</body>
</html>