<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 3);

        for ($column = 1; $column <= 10; $column++) {
            if ($column % SIZE == 0)
                echo $column . '<br>';
        }
        
    ?>
</body>
</html>