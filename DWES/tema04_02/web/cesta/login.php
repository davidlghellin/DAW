<?php
session_start();
require_once 'conexion.php';
function error($mensaje)
{
    $_SESSION['error'] = $mensaje;
    header('Location:login.php');
    die();
}
if (isset($_POST['login'])) {
    $nombre = trim($_POST['usuario']);
    $pass = trim($_POST['pass']);
    if (strlen($nombre) == 0 || strlen($pass) == 0) {
        error("Error, El nombre o la contraseña no pueden contener solo espacios en blancos.");
    }

    //creamos el sha256 de la contraseña que es como se almacena en mysql

    $pass1 = hash('sha256', $pass);
    $consulta = "select * from usuarios_pass where usuario=:u AND password=:p";
    $stmt = $conProyecto->prepare($consulta);
    try {
        $stmt->execute([
            ':u' => $nombre,
            ':p' => $pass1
        ]);
    } catch (PDOException $ex) {
        cerrarTodo($conProyecto, $stmt);
        error("Error en la consulta a la base de datos.");
    }
    if ($stmt->rowCount() == 0) {
        unset($_POST['login']);
        cerrarTodo($conProyecto, $stmt);
        error("Error, Nombre de usuario o password incorrecto");
    }
    cerrarTodo($conProyecto, $stmt);
    //Nos hemos validado correctamente creamos la sesion de usuario con el nombre de usuario
    $_SESSION['nombre'] = $nombre;
    // delante de los header no puede haber nada de html
    header("Location: listado.php");
} else {

require_once("./views/template/header.php");
?>

    <body style="background:silver;">
        <div class="container mt-5">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form name='login' method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="usuario" name='usuario' required>

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="contraseña" name='pass' required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn float-right btn-success" name='login'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<div class='mt-3 text-danger font-weight-bold text-lg'>";
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                echo "</div>";
            }
            ?>
        </div>
    <?php } ?>
    </body>

    </html>