

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcearia Rosas</title>
    <style>
        body{
            background-image: url(../img/background.png);
            background-size: 120%;
            backdrop-filter: blur(2px);
        }
        main{
            border-radius: 20px;
            background-color: #453F78;
            display: flex;
            justify-content: center;
            align-items: center;
            color: whitesmoke;
        }
        .intro{
            width: 50%;
            height: 50%;
            text-align: justify;
            line-height: 25px;
            font-size: larger;
        }
    </style>
</head>
<body>
<?php 


$conteudo = 'home';
include "../components/header.php";
include "../components/main.php";
include "../components/footer.php";
?>
</body>
</html>