<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre" required> <br>
        <input type="submit" value="enviar">
    </form>
    
    <h2>Datos del nombre enviados</h2>
    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "Lo hemos recibido!<hr>";
        echo "Bienvenido $_POST[nombre]";
        echo "<hr><pre>";
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>