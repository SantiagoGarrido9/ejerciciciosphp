
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
        
    <?php
        for($i=1 ; $i <= 169; $i++){
            if(169 % $i != 0){
                echo $i;
                echo "<br>";
            }
            else {
                echo "El numero" . $i  . " es primo";
                echo "<br>";
            }
        } 
    ?>

</body>
</html>