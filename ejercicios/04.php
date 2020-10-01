<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
</head>
<body>
    <?php
    
    $n1=1;
    $n2=0;
    for ($i=0; $i<=10; $i++)
    {
        $suma=$n1+$n2;
        $n1=$n2;
        $n2=$suma;
        echo $suma." ";
    }
        
    ?>
</body>
</html>