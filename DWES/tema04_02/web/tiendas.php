<?php

require_once("./views/template/header.php");
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
            while ($row = $resultado->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">1</th>';
                printf('<td>%d</td>', $row['id']);
                printf('<td>%s</td>', $row['nombre']);
                printf('<td>%s</td>', $row['tlf']);
                echo '<td>
                        <a href="./editar-tienda.php?id='.$row['id'].'&nmbr='.$row['nombre'].'&tlf='.$row['tlf'].'" >      
                          <button class="btn btn-success">
                            <i class="fa-solid fa-user-pen"></i>
                          </button>
                        </a>
                        <button class="btn btn-danger" title="Eliminar registro">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                      </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</main>