<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>

<body style="background: gainsboro">
    <h3 style="text-align: center; font-weight: bold">Login</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1>Promedios</h1>
        <label for=""> Nombre:</label>
        <input type="text" name="nombre">
        <label for=""> nota1:</label>
        <input type="text" name="nota1">
        <label for=""> nota2:</label>
        <input type="text" name="nota2">
        <label for=""> nota3:</label>
        <input type="text" name="nota3">
        <br />
        <input type="submit" name="enviar" value="Calcular">

        <?php
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $promdieo = ($nota1 + $nota2 + $nota3) / 3;
            echo "<p>{$nombre}, tu nota media es $promdieo</p>";
        }
        ?>
        <?php

        ?>

    </form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1>Validar</h1>
        <label for=""> Nombre:</label>
        <input type="text" name="nombreV">
        <label for=""> edad:</label>
        <input type="text" name="edad">
        <label for=""> correo:</label>
        <input type="text" name="correo">
        <br />
        <input type="submit" name="enviarV" value="validar">


        <?php

        $nombreV = $_POST['nombreV'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];

        if (isset($_POST['enviarV'])) {
            if (empty($nombreV)) {
                echo "<p class='error'> Agrega el nombre </p>";
            } else {
                if (strlen($nombreV > 10)) {
                    echo "<p class='error'> Nombre muy largo</p>";
                }
            }
        }
        if (isset($_POST['enviarV'])) {
            if (empty($edad)) {
                echo "<p class='edad'> Agrega el edad </p>";
            }
        }
        if (isset($_POST['enviarV'])) {
            if (empty($correo)) {
                echo "<p class='error'> Agrega el correo </p>";
            }
        }
        ?>

    </form>


</body>

</html>