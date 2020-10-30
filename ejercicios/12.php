<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 12</title>
</head><body>
    <h2>Formulario con Retroceso</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="nombre">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['nombre'];
  if (empty($name)) {
    echo "El nombre no se ha enviado";
  } else {
    echo $name;
  }
}
?>
</body></html>