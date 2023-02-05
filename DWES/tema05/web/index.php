<?php

require_once("./config.php");
require_once('./model/coche.php');
require_once("./views/template/header.php");
?>



<main class="container">
    <?php
    $c = new Coche();
    $c->nombre = 'Wolsvagen Jetta';
    $c->muestra();
    echo Coche::TIPO;
    Coche::incrementa();
    echo '<br>';
    echo "La clase es: " . get_class($c);
    ?>
</main>
<?php
// https://fontawesome.com/
require_once('views/template/footer.php');
?>