<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
}
if (isset($_POST['vaciar'])) {
    unset($_SESSION['cesta']);
}

require_once("./views/template/header.php");
require_once 'conexion.php';
$conProyecto = new mysqli('db', 'gestor', 'secreto', 'proyecto', 3306);

try {
    $resultado = $conProyecto->query('SELECT id, nombre, tlf FROM tiendas', MYSQLI_USE_RESULT);
} catch (PDOException $ex) {
    cerrarTodo($conProyecto, $resultado);
    die("Error al recuperar los productos " . $ex->getMessage());
}
?>


<main class="container">
    <div class="container text-center">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
                <div class="float float-right d-inline-flex mt-2">
                    <i class="fa fa-shopping-cart mr-2 fa-2x"></i>
                    <?php
                    if (isset($_SESSION['cesta'])) {
                        $cantidad = count($_SESSION['cesta']);
                        echo "<input type='text' disabled class='form-control mr-2 bg-transparent text-white' value='$cantidad' size='2px'>";
                    } else {
                        echo "<input type='text' disabled class='form-control mr-2 bg-transparent text-white' value='0' size='2px'>";
                    }

                    ?>
                    <i class="fas fa-user mr-3 fa-2x"></i>
                    <input type="text" size='10px' value="<?php echo $_SESSION['nombre']; ?>" class="form-control mr-2 bg-transparent text-white" disabled>
                    <a href="cerrar.php" class="btn btn-warning mr-2">Salir</a>
                </div>
            </div>
        </div>
    </div>
    <form class="form-inline" name="vaciar" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <a href="cesta.php" class="btn btn-success mr-2">Ir a Cesta</a>
        <input type='submit' value='Vaciar Carro' class="btn btn-danger" name="vaciar">
    </form>

    <h3 style="text-align: center; font-weight: bold">Lista de Tiendas</h3>
    <a href="./crear-tienda.php" class="btn btn-success">Crear Tienda</a>
    <table id="tblTiendas" class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Detalle</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $resultado->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">1</th>';
                printf('<td>%d</td>', $row['id']);
                printf('<td>%s</td>', $row['nombre']);
                printf('<td>%s</td>', $row['tlf']);
                echo '</tr>';
            }
            cerrarTodo($conProyecto, $resultado);
            ?>
        </tbody>
    </table>
</main>