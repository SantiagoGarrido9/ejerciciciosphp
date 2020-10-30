<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
<h2>Formulario de envio a si mismo</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Nombre</label><input type="text" value="" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['nombre'];
        echo "<br><hr>";
        if (empty($name) || strlen($name) < 4) {
            echo "El nombre es obligatorio y tiene que tener mas de 3 caracteres<br>";
            var_dump($_POST);
        } else {
            echo "Se ha enviado correctamente ";
            echo $name;
        }
    }
?>
</body>
</html>