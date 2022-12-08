<?php

require_once("./config.php");
// Si el usuario no se ha autentificado, pedimos las credenciales

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    die();
}
// nos dará el mensaje de error el httpie, podemos hacerlo con postman
// http get http://localhost:8888/web/comprubea_login.php

try {
    $conProyecto = new PDO($DSN, $DB_USER, $DB_PASS);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Error en la conexión: mensaje: " . $ex->getMessage());
}
// Hacemos la consulta+

$sql = "SELECT * FROM usuarios_pass WHERE USUARIO= :login AND PASSWORD= :password";

$stmt = $conProyecto->prepare($sql);
$login = htmlentities(addslashes(($_POST['nombre'])));
$pass = htmlentities(addslashes(($_POST['pass'])));

$password = hash('sha256', $_SERVER['PHP_AUTH_PW']);
try {
    $stmt->bindValue(":login", $_SERVER['PHP_AUTH_USER']);
    $stmt->bindValue(":password", $password);

    $stmt->execute();
} catch (PDOException $ex) {
    $conProyecto = null;
    die("Error al recuperar las datos de Mysql: " . $ex->getMessage());
}
// Si la Consulta No devuelve ninguna fila las credenciales son erroneas.
$num_registro = $stmt->rowCount();
if ($num_registro == 0) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    $stmt = null;
    $conProyecto = null;
    die();
}
else{
    $stmt = null;
    $conProyecto = null;
}
require_once("./views/template/header.php");
?>



<main class="container">
    <h3 style="text-align: center; font-weight: bold">Conexión Login</h3>
    <div class="form-group">
        <label for="txtNonbre" class="font-weight-bold">Nombre</label>
        <br>
        <?php echo $_SERVER['PHP_AUTH_USER']; ?>
    </div>
    <div class="form-group">
        <label for="txtNonbre" class="font-weight-bold">Pass en sha</label>
        <br>
        <?php echo hash('sha256', $_SERVER['PHP_AUTH_PW']); ?>
    </div>
</main>
<?php
// https://fontawesome.com/
require_once('views/template/footer.php');
?>