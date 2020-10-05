<?php
if(isset($_GET) && !empty($_GET)){
    echo "El titulo del libro es $_GET[titulo] y su autor es $_GET[autor] .<br>";
    echo "La editorial es $_GET[editorial] y tiene $_GET[paginas] paginas .<br>";
    echo "<hr><pre>";
    var_dump($_GET);
}
 else {
     echo "No hemos recibido nada!";
}