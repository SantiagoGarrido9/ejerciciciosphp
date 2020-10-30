<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="olvidar[]">
    <input type="submit" value="nombre"> 

    <hr> 
    
    <?php if (isset($_POST['olvidar'])) {
        foreach($_POST['olvidar'] as $olvidar) {
        echo '<input type="text" name="olvidar[]" value="' . $olvidar . '"><br>';
        }
    }
    ?>
    </form>
</body>
</html