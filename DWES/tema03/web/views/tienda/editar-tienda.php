<?php
require_once('../template/header.php');
?>


<main class="container">
    <h3 style="text-align: center; font-weight: bold">Modificar tienda</h3>
    <form method="get">
        <div class="form-group">
            <label for="txtNonbre">ID</label>
            <input type="id" class="form-control" id="txtId" name="id" aria-describedby="emailHelp" value='<?php echo $_GET['id']; ?>' readonly>
        </div>
        <div class="form-group">
            <label for="txtNonbre">Nombre de la tienda</label>
            <input type="nombre" class="form-control" id="txtNonbre" name="nombre" aria-describedby="emailHelp" value='<?php echo $_GET['nmbr']; ?>' require>
            <small id="emailHelp" class="form-text text-muted">Inserte nombre tienda</small>
        </div>
        <div class="form-group">
            <label for="txtTelefono">Teléfono</label>
            <input class="form-control" id="txtTelefono" name="telefono" value='<?php echo $_GET['tlf']; ?>'  require>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Enviar</button>
    </form>
</main>

<?php
require_once('../template/footer.php');
?>