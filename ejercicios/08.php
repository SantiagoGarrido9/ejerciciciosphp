<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php

        $array[]="Austin Rivers";
        $array[]="Ben McLemore";
        $array[]="Anthony Harris";
        $array[10]="Chris Clemons";
        $array[]="C. N'Dumba-Capele";

        echo "<hr>Con la Etiqueta li <br>"."<br>";
        foreach ($array as $salir){
            echo "<li>", $salir,"</li>" . '<br>';
        }

        echo "<hr>Con la Etiqueta ul<br>";
        foreach ($array as $salir1){
            echo "<ul>", $salir1,"</ul>" . '<br>';
        }

        echo "<hr>Con la Etiqueta li y con la posicion del array<br>"."<br>";
        foreach ($array as $position=>$salir){
            echo "<li>", $position . ": " . $salir,"</li>" . '<br>';
        }

        echo "<hr>Con la Etiqueta ul y con la posicion del array<br>";
        foreach ($array as $position=>$salir1){
            echo "<ul>", $position . ": " . $salir1, "</ul>" . '<br>';
        }

    ?>
</body>
</html>