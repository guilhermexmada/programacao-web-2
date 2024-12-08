<form action="../back/proc_edicao.php" method="post">
    <label>Email: </label>
    <input type="email" name="email" value="<?php echo $_GET['arroba'] ?>" readonly=""><br><br>
    <label>Novo Usuário: </label>
    <input type="text" name="novoNome"><br><br>
    <label>Nova Senha: </label>
    <input type="password" name="novaSenha"><br><br>
    <button type="submit">Cadastrar
</form>