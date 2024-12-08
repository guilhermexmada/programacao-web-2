<style>
    <?php 
        include "../style/main.css";
    ?>
</style>

<main>
    <?php 
//-------------------------------------------------------------------------------//
//cadastro
        if($conteudo == 'cadastro'){
            echo '
                <h1>Cadastro</h1>
                <form action="../back/proc_cadastro.php" method="post">
                    <label>Email: </label>
                    <input type="email" name="email"><br><br>
                    <label>Nome: </label>
                    <input type="text" name="nome"><br><br>
                    <label>Senha: </label>
                    <input type="password" name="senha"><br><br>
                    <button type="submit">Cadastrar
                </form>
            ';
        }
        else if($conteudo == 'login'){
            echo '
            <h1>Login</h1>
            <form action="../back/proc_login.php" method="post">
                <label>Email: </label>
                <input type="email" name="email"><br><br>
                <label>Senha: </label>
                <input type="password" name="senha"><br><br>
                <button type="submit">Login
            </form>
        ';
        }
//-------------------------------------------------------------------------------//
//home
        else if($conteudo == 'home'){
            echo '<h1>Os melhores móveis planejados</h1>';
            echo '<p class="intro">Bem-vindo à nossa marcenaria! Aqui, a paixão pelo artesanato se une à precisão técnica para criar móveis e peças de madeira de alta qualidade. Com anos de experiência, nossos artesãos habilidosos dão vida a designs personalizados que se encaixam perfeitamente em sua casa ou escritório. Valorizamos a satisfação do cliente e nos esforçamos para superar suas expectativas em cada projeto. Venha nos visitar e descubra a beleza da madeira transformada em arte.</p>';
        }
//-------------------------------------------------------------------------------//
//lista
        else if($conteudo == 'lista'){
            echo '<h1>Lista de Clientes</h1>';
            include "../back/conexao.php";
            $sql = "SELECT * FROM clientes";
            $consulta = mysqli_query($conexao,$sql);
            echo " 
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Email</td>
                        <td>Nome</td>
                        <td>Senha</td>
                    </tr>
            ";
            while($registro = mysqli_fetch_assoc($consulta)){
                echo "
                <tr>
                    <td>".$registro['id']."</td>
                    <td>".$registro['email']."</td>
                    <td>".$registro['nome']."</td>
                    <td>".$registro['senha']."</td>
                    <td><a href='../pages/edicao.php?arroba={$registro['email']}'>editar</a></td>
                    <td><a href='../back/proc_exclusao.php?arroba={$registro['email']}'>excluir</a></td>
                </tr>
                ";
            };
            echo 
            "</table>";
            }
//-------------------------------------------------------------------------------//
            if($conteudo == "vendas"){
                include "../back/conexao.php";
                $sql = "SELECT * FROM clientes";
                $consulta = mysqli_query($conexao,$sql);
                $registro = mysqli_fetch_assoc($consulta);
                echo '
                <h1>Realize seu pedido</h1>
                <form action="../back/proc_venda.php" method="post">
                <label>Seu ID</label>
                <input type="number" name="id" value='.$registro['id'].' readonly=""><br><br>
                <label>Produto: </label>
                <input type="text" name="produto"><br><br>
                <label>Quantidade: </label>
                <input type="number" name="quantidade"><br><br>
                <label>Preço: </label>
                <input type="text" name="preco"><br><br>
                <button type="submit">Enviar Pedido
            </form>
                ';}
//------------------------------------//
            if($conteudo == "registro"){
                echo '<h1>Registro de Pedidos</h1>';
                include "../back/conexao.php";
                $sql = "SELECT * FROM vendas";
                $consulta = mysqli_query($conexao,$sql);
                echo " 
                    <table>
                        <tr>
                            <td>ID venda</td>
                            <td>ID cliente</td>
                            <td>Produto</td>
                            <td>Quantidade</td>
                            <td>Preço unitário</td>
                            <td>Preço total</td>
                        </tr>
                ";
                while($registro = mysqli_fetch_assoc($consulta)){
                    echo "
                    <tr>
                        <td>".$registro['id_venda']."</td>
                        <td>".$registro['id_cliente']."</td>
                        <td>".$registro['produto']."</td>
                        <td>".$registro['quantidade']."</td>
                        <td>".$registro['preco']."</td>
                        <td>".$registro['preco'] * $registro['quantidade']."</td>
                    </tr>
                    ";
                };
                echo 
                "</table>";
            }
            

    ?>
</main>