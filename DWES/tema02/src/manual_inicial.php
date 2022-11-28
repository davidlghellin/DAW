<?php    //archivo uno.php
echo "este archivo solo contiene código php";
echo '<br>';
echo '<br>';
print '<br>';
echo '<h2>bucle</h2>';
for ($i = 1; $i < 10; $i++) {
    echo $i . '<br>';
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h2>cadenas</h2>';
$ciclo = "DAW";
$modulo = "DWES";
print "<p>";
printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
print "</p>";
printf("El número PI vale %+.2f", 3.1416);
$txt_pi = sprintf("El número PI vale %+.2f", 3.1416);

echo '<br>';
echo $txt_pi;
echo '<br>';

$modulo = "DWES";
print "<p>Módulo: $modulo</p>";
print "<p>Módulo: ${modulo}</p>";
echo '<br>';


$a = "Módulo ";
$b = $a . "DWES"; // ahora $b contiene "Módulo DWES"
$a .= "DWES"; // ahora $a también contiene "Módulo DWES"

$a = <<<MICADENA
Desarrollo de Aplicaciones Web<br />
Desarrollo Web en Entorno Servidor
MICADENA;
print $a;
echo '<br>';


define("PI", 3.1416, true);
echo "El valor de PI es " . PI; //El identificador se reconoce tanto por PI como por pi
echo '<br>';

$a = "-3.1416";
printf("La variable \'\$a\' vale %+.2f", $a);
echo '<br>';
echo '<br>';

echo '<h2>fechas</h2>';
date_default_timezone_set('Europe/Madrid');
setlocale(LC_ALL, 'es_ES.UTF-8');
echo date('d-j-Y');
echo '<br>';

$fechaMySql = "2020-12-31";
$objetoDateTime = date_create_from_format('Y-m-d', $fechaMySql);
var_dump($objetoDateTime);
//o más rápido
$fecha1 = new DateTime("2020-12-31");
echo "<br>";
var_dump($fecha1);

//fecha actual
$ahora = new DateTime();
echo "<br>";
var_dump($ahora);
//Fecha de ayer
$ayer = new dateTime("yesterday");
echo "<br>";
var_dump($ayer);
//Fecha del último lunes
$ultimoLunes = new DateTime("Last Monday");
echo "<br>";
var_dump($ultimoLunes);

echo "<br>";
echo "<br>";
echo '<h2>variables sistema</h2>';
setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set('Europe/Madrid');
$ahora = new DateTime();
$fecha = strftime("Hoy es %A, %d de %B de %Y y son las %H:%M:%S", date_timestamp_get($ahora));
echo $fecha;
echo "<br>";
echo "<a href=\"https://www.php.net/manual/es/reserved.variables.server.php\">https://www.php.net/manual/es/reserved.variables.server.php</a>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "$a";
echo "<br>";
echo "$b";
echo "<br>";
echo '<h2>condicionales</h2>';
if ($a < $b)
    print "a es menor que b";
elseif ($a > $b)
    print "a es mayor que b";
else
    print "a es igual a b";
echo "<br>";
echo "<br>";
switch ($a) {
    case 0:
        print "a vale 0";
        break;
    case 1:
        print "a vale 1";
        break;
    default:
        print "a no vale 0 ni 1";
}
$motor = 1; //podemos dar valores 2,3,4, o probar uno no válido
//1.- Con if elseif else ---------------------------------------------
if ($motor == 1) {
    echo "El motor es de Gasolina<br>";
} elseif ($motor == 2) {
    echo "El motor es Diesel<br>";
} elseif ($motor == 3) {
    echo "El motor es de una Motocicleta<br>";
} elseif ($motor == 4) {
    echo "El motor es Eléctrico<br>";
} else {
    echo "Error, el tipo de motor NO es válido<br>";
}
//2.- con switch -----------------------------------------------------
switch ($motor) {
    case 1:
        echo "El motor es de Gasolina<br>";
        break;
    case 2:
        echo "El motor es Diesel<br>";
        break;
    case 3:
        echo "El motor es de una Motocicleta<br>";
        break;
    case 4:
        echo "El motor es Eléctrico<br>";
        break;
    default:
        echo "Error, el tipo de motor NO es válido<br>";
}
echo "<br>";
echo '<h2>bucles</h2>';
$a = 1;
while ($a < 8) {
    $a += 3;
}
echo $a; // el valor obtenido es 10
echo "<br>";
$a = 5;
do {
    $a -= 3;
} while ($a > 10);
print $a; // el bucle se ejecuta una sola vez, con lo que el valor obtenido es 2
echo "<br>";
for ($a = 5; $a < 10; $a += 3) {
    print $a; // Se muestran los valores 5 y 8
    print "<br />";
}
echo "<br>";
echo "<br>";
echo '<h2>definiciones</h2>';
include 'definiciones.php';
echo "${david}";


echo "<br>";
echo "<br>";
echo '<h2>funciones</h2>';

function precioConIva($precio, $iva = 0.18)
{
    return $precio * (1 + $iva);
}
$precio = 10;
$precioIva = precioConIva($precio, 0.23); //ahora $iva=0.23
echo "El precio con IVA es $precioIva";

//A partir de la versión 7.0 de PHP
function precioConIvaTipado(float $precio): float
{ //con :float especificamos el tipo d dato a devolver
    return $precio * 1.18;
}
$precio = 10;
$precioIva = precioConIvaTipado($precio);
echo  "El precio con IVA es $precioIva";
echo "<br>";
echo "<br>";


$modulos1 = array(0 => "Programación", 1 => "Bases de datos", 9 => "Desarrollo web en entorno servidor");
echo $modulos1;
echo "<br>";
$modulos2 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");
echo $modulos2;

$ciclos = array(
    "DAW" => array("PR" => "Programación", "BD" => "Bases de datos", "PMDMO" => "Programacion Multimedia"),
    "DAM" => array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web")
);

//En formato [ ]

$ciclos2 = [
    "DAW" => ["PR" => "Programación", "BD" => "Bases de datos", "PMDMO" => "Programacion Multimedia"],
    "DAM" => ["PR" => "Programacion", "BD" => "Bases de datos", "DWES" => "Desarrollo web"]
];

echo "<br>";
echo "<br>";
foreach ($modulos1 as $modulo) {
    echo "Módulo: " . $modulo . "<br />";
}
echo "<br>";
echo "<br>";
$modulos3 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");
foreach ($modulos3 as $key => $value) {
    echo  "El código del módulo " . $value . " es " . $key . "<br />";
}


echo "<br>";
echo "<br>";
$a = <<<MICADENA
<table align="center" border="1" cellpadding="2" cellspacing="2">
<tbody style="background-color: grey; text-align: center; font-weight: bold">
    <td>Clave</td>
    <td>Valor</td>
</tbody>
MICADENA;

print $a;
foreach ($_SERVER as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "<tr>";
}
echo "</table>";
echo "<br>";
