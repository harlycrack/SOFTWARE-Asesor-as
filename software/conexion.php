
<?php

$server ="Localhost";
$user ="root";
$pass ="";
$db = "asesorias";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_error) {
    die("conexion fallida". $conexion->connect_error);
}
else{
    echo"conectado";
}

?>
