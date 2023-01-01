<?php

require_once("./conexion.php");
require_once("./views/template/header.php");

try {
    $conProyecto = new PDO($DSN, $DB_USER, $DB_PASS);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Error en la conexión: mensaje: " . $ex->getMessage());
}

?>

<main class="container">
    <h3 style="text-align: center; font-weight: bold">Conexión Login</h3>
    <div class="container text-center">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form name='login' method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fauser"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="usuario" name='usuario' required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fakey"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="contraseña" name='pass' required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn floatright btn-success" name='login'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>