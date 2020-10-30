
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <form action="15action.php" method="post">
        <input type="checkbox" name="nombres[]" id="nombre1" value="Santi">
            <label for="nombre1">Santi</label>

        <input type="checkbox" name="nombres[]" id="nombre2" value="Ernesto">
            <label for="nombre2">Ernesto</label>

        <input type="checkbox" name="nombres[]" id="nombre3" value="Maria">
            <label for="nombre3">Maria</label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>