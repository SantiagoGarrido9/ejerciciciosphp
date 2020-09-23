<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 10);

    $number = 8;
    $bucle = $number;
        for ($column = 1; $column <= SIZE; $column++) {
            $number = $bucle * $column;
            echo $number ;
            echo "    ";
        }
        
    ?>
</body>
</html>