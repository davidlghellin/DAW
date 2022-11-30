    <?php
    require_once('views/template/header.php');
    ?>

    <main class="container">
        <h3 style="text-align: center; font-weight: bold">Lista de Tiendas</h3>
        <a href="./views/tienda/crear-tienda.php" class="btn btn-success">Crear Tienda</a>
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
                <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>Otto</td>
                    <td>123</td>
                    <td><i class="fa-solid fa-user-pen"></i><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>2</td>
                    <td>Otto</td>
                    <td>456</td>
                    <td><i class="fa-solid fa-user-pen"></i><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>3</td>
                    <td>Otto</td>
                    <td>789</td>
                    <td>
                        <a class="btn" href="./views/tienda/editar-tienda.php?p=1">
                            <i class="fa-solid fa-user-pen"></i>
                        </a>
                        <i class="fa-solid fa-trash-can"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <?php
    //https://fontawesome.com/
    require_once('views/template/footer.php');
    ?>