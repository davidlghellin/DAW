<?php
require_once('../template/header.php');

$conProyecto = new mysqli('db', 'gestor', 'secreto', 'proyecto', 3306);
$resultado = $conProyecto->query('SELECT id, nombre, tlf FROM tiendas', MYSQLI_USE_RESULT);
?>
<main class="container">
    <h3 style="text-align: center; font-weight: bold">Lista de Tiendas</h3>
    <a href="./crear-tienda.php" class="btn btn-success">Crear Tienda</a>
    <table id="tblTiendas" class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Detalle</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $resultado->fetch_row()) {
                echo '<tr>';
                echo '<th scope="row">1</th>';
                printf('<td>%d</td>', $row[0]);
                printf('<td>%s</td>', $row[1]);
                printf('<td>%s</td>', $row[2]);
                echo '<td><i class="fa-solid fa-user-pen"></i><i class="fa-solid fa-trash-can"></i></td>';
                echo '</tr>';
            }
            ?>
            <tr>
                <th scope="row">3</th>
                <td>3</td>
                <td>Otto</td>
                <td>789</td>
                <td>
                    <button class="btn" href="./views/tienda/editar-tienda.php?p=1">
                        <i class="fa-solid fa-user-pen"></i>
                    </button>
                    <button class="btn" title="Eliminar registro" onclick="fntDelTienda(1)">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php
//https://fontawesome.com/
require_once('../template/footer.php');
?>