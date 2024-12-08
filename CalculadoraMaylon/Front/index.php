<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<form class="calculator" action="../Back/back.php" method="post">
    <p>Número 1<p>
    <input type="number" name="numero1" placeholder="num1">
    <p>Número 2</p>
    <input type="number" name="numero2" placeholder="num2">
    <p>Operação</p>
    <div>
    <input type="radio" value="add" name="opera">+
    <input type="radio" value="sub" name="opera">-
    <input type="radio" value="mult" name="opera">*
    <input type="radio" value="div" name="opera">/
    </div>
    <button>CALCULAR</button>
    <p>Resultado: <?php echo $_SESSION['resultado']; ?></p>
</form>
    
</body>
</html>