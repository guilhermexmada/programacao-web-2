<?php 
        include "conn.php";
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="edicao.php" method="post">
    <h1>Edição de Produtos</h1>
    
    <label>ID do produto:</label>
    <input type="number" value="<?php echo $_GET['id']?>" name="id" readonly="true">
    <label>Novo nome do produto:</label>
    <input type="text" name="n_nome">
    <label>Quantidade:</label>
    <input type="number" name="n_quant">
    <label>Preço:</label>
    <input type="number" name="n_preco">
    <button type="submit">Atualizar Produto</button>
    </form>
</body>
</html>