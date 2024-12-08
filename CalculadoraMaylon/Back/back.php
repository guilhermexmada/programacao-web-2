<?php 
session_start();
//declarando variáveis dos inputs
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$opera = $_POST['opera'];
$resultado;


switch($opera){
     case 'add':
          $resultado = $num1 + $num2;
          break;
          case 'sub':
               $resultado = $num1 - $num2;
               break;
               case 'mult':
                    $resultado = $num1 * $num2;
                    break;
                    case 'div':
                         $resultado = $num1 / $num2;
                         break;
                         default:
                         $resultado = 'Selecione uma operação';
                         break;
}
$_SESSION['resultado'] = $resultado;
header('Location: ../Front/index.php');

?>