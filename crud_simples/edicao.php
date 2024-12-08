<?php 
    $id = $_GET['id'];
?>

<form action="procedimentos/atualizar.php?" method="get">
    <label>Novo ID</label>
    <input type="number" name="id" value="<?php echo $id ?>" readonly="">
    <label>Novo nome de usuário</label>
    <input type="text" name="novoNome" placeholder="novo nome">
    <label>Nova senha</label>
    <input type="password" name="novaSenha" placeholder="nova senha">
    <button type="submit"></button>
</form>