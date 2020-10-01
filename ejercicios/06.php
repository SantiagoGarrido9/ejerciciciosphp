<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
<?php

    echo "Plantilla de los Houston Rockets<br>";

    $array = ["Austin Rivers","Ben McLemore","Anthony Harris","Chris Clemons","C. N'Dumba-Capela"];
    $array1 = array("Austin Rivers","Ben McLemore","Anthony Harris","Chris Clemons","C. N'Dumba-Capela");

    echo "<hr>Con la Etiqueta li <br>"."<br>";

    foreach ($array as $salir){
        echo "<li>", $salir,"</li>" . '<br>';
    }

    echo "<hr>Con la Etiqueta ul<br>";

    foreach ($array1 as $salir1){
        echo "<ul>", $salir1,"</ul>" . '<br>';
    }

    echo "<hr>Con la Etiqueta li y con la posicion del array<br>"."<br>";
    foreach ($array as $position=>$salir){
        echo "<li>", $position . ": " . $salir,"</li>" . '<br>';
    }

    echo "<hr>Con la Etiqueta ul y con la posicion del array<br>";
    foreach ($array1 as $position=>$salir1){
        echo "<ul>", $position . ": " . $salir1, "</ul>" . '<br>';
    }
?>
</body>
</html>