<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
<h2>Formulario Calculadora</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>Valor 1: <input type="numero" name="T1" size="20"></p>
        <p>Valor 2: <input type="numero" name="T2" size="20"></p>
        <p><input type="submit" value="Sumar" name="sum"></p> 
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val1 = $_REQUEST['T1'];
        $val2 = $_REQUEST['T2'];
        
        $suma = $val1 + $val2;

        if(empty($_REQUEST)){
            echo "$val1 + $val2 = $suma";
        }else {
            echo "<br>Poner un numero es obligatorio";
        }   
    }
?>
</body>
</html>