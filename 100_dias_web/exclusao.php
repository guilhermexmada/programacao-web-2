<?php

include "conn.php";

$id = $_GET['id'];

$sql = "DELETE from produtos where id_produto = '$id'";
$conexao->query($sql);

header("Location: index.php");