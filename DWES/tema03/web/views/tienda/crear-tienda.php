<?php
require_once('../template/header.php');
?>


<main class="container">
    <h3 style="text-align: center; font-weight: bold">Crear tienda</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <div class="form-group">
            <label for="txtNonbre">Nombre de la tienda</label>
            <input type="nombre" class="form-control" id="txtNonbre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre de la tienda" require>
            <small id="emailHelp" class="form-text text-muted">Inserte nombre tienda</small>
        </div>
        <div class="form-group">
            <label for="txtTelefono">Teléfono</label>
            <input class="form-control" id="txtTelefono" name="telefono" placeholder="963852741" require>
        </div>
        <button type="submit" name="enviar" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Enviar</button>
        <input name="usuarios" type="hidden" value="<?php if (isset($agenda)) echo implode(",", $agenda) ?>" />

    </form>
</main>

<?php
require_once('../template/footer.php');

if (isset($_REQUEST['enviar'])) {
    $nonbre = $_GET["nombre"];
    $telefono = $_GET["telefono"];
    $conBBDD = new mysqli('db', 'gestor', 'secreto', 'proyecto', 3306);
    $stmt = $conBBDD->stmt_init();
    $stmt->prepare('INSERT INTO proyecto.tiendas (nombre,tlf) VALUES (?, ?)');
    $stmt->bind_param('ss', $nonbre, $telefono);
    $stmt->execute();
    $stmt->close();
    $conBBDD->close();
}
?>