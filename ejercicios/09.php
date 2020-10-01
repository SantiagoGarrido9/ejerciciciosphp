<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $array[]="Esapaña";
    $array[13]="Portugal";
    $array[]="Francia";
    $array[20]="Andorra";
    
        echo "<hr>Sacar nombre de paises en un array dinámico<br>"."<br>";
        foreach ($array as $salir){
            echo $salir . '<br>';
        }
        
    ?>
</body>
</html>