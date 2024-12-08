<style>
    <?php
        include "../style/header.css";
    ?>
</style>
<header>
    <menu>

        <p>Bem-vindo, <?php
            session_start();
            if(isset($_SESSION["log"])){
            }
            else{
                echo 'Entre!';
            }
        ?></p>

        <a href="home.php">Home</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Login</a>
        <a href="lista.php">Lista</a>
        <a href="vendas.php">Vendas</a>
        <a href="registro_vendas.php">Registro de Vendas</a>
    </menu>
</header>