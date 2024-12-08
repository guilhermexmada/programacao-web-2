<?php

include "conn.php";

$sql = "SELECT * FROM produtos";

$resultado = $conexao->query($sql);

echo "
<table width='500'>
    <tr>
        <th>ID do produto</th>
        <th>Nome do produto</th>
        <th>Quantidade cadastrada</th>
        <th>Preço Unitário</th>
        <th colspan='2'>Ações</th>
    </tr> 
    ";
while($linha =  mysqli_fetch_assoc($resultado)){
    echo "<tr>
        <td>".$linha['id_produto']."</td>
        <td>".$linha['nome_produto']."</td>
        <td>".$linha['quantidade_produto']."</td>
        <td>".$linha['valor_produto']."</td>
        <td><a href='pagina_edicao.php?id=".$linha['id_produto']."'>EDITAR</a></td>
        <td><a href='exclusao.php?id=".$linha['id_produto']."'>EXCLUIR</a></td>
    </tr>
     ";
};
echo "</table>";

?>