<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BBDD</title>
</head>

<body style="background: gainsboro">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">SistemasDAvid</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tiendas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ver tiendas</a>
                            <a class="dropdown-item" href="#">Añadir tiendas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form id="frmSearch " class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" id="txtBuscar" name="txtBuscar" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main class="container">
        <h3 style="text-align: center; font-weight: bold">Lista de Tiendas</h3>
        <a href="crea.php" class="btn btn-success">Crear Tienda</a>
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
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Actualizar - Borrar</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Otto</td>
                    <td>Thornton</td>
                    <td>Actualizar - Borrar</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>Otto</td>
                    <td>the Bird</td>
                    <td>Actualizar - Borrar</td>
                </tr>
            </tbody>
        </table>
    </main>

    <?php
    // Para poder hacer uso de caja necesitamos 
    require_once './src/Caja.php';
    // Para poder hacer uso de caja necesitamos 
    use App\Caja;


    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <?php
                $micaja = new Caja;
                $micaja->introduce("Esto es la salida de la caja col1");
                $micaja->muestra_contenido();
                ?>
            </div>
            <div class="col-sm">
                <?php
                $micaja = new Caja;
                $micaja->introduce("Esto es la salida de la col2");
                $micaja->muestra_contenido();
                ?>
            </div>
            <div class="col-sm">
                A mano
            </div>
        </div>
    </div>
    <a href="src/views/Tiendas.php">Tiendas </a>
</body>

</html>