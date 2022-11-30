<?php
require_once('../template/header.php');
?>


<main class="container">
    <h3 style="text-align: center; font-weight: bold">Crear tienda</h3>
    <form>
        <div class="form-group">
            <label for="txtNonbre">Email address</label>
            <input type="nombre" class="form-control" id="txtNonbre" aria-describedby="emailHelp" placeholder="Nombre de la tienda" require>
            <small id="emailHelp" class="form-text text-muted">Inserte nombre tienda</small>
        </div>
        <div class="form-group">
            <label for="txtTelefono">Teléfono</label>
            <input type="number" class="form-control" id="txtTelefono" placeholder="963852741" require>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Enviar</button>
    </form>
</main>

<?php
require_once('../template/footer.php');
?>