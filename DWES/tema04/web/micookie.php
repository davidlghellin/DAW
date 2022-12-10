<?php

require_once("./views/template/header.php");
// Si el usuario no se ha autentificado, pedimos las credenciales

echo $_COOKIE['prueba'];
echo "<br/>";
$userCookie = $_SERVER['PHP_AUTH_USER'];
echo  $_COOKIE[$userCookie];


if (isset($_COOKIE[$_SERVER['PHP_AUTH_USER']])) {
    $mensaje = $_COOKIE[$_SERVER['PHP_AUTH_USER']];
} //si no existe es la primera visita para este usuario
else {
    $mensaje = "Es la primera vez que visitas la página.";
}
echo "<br/>";
echo  $mensaje;
