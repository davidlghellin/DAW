<?php
    echo "¡Hola, soy un script de PHP!\n";
    ?>
  <!-- comentamos -->
  <?
    // Al asignarle el valor 7, la variable es de tipo “entero”
    $mi_variable = 7;

    // Si le cambiamos el contenido
    $mi_variable = "siete";
    // La variable puede cambiar de tipo
    // En este caso pasa a ser de tipo “cadena”
    echo $mi_variable
    ?>

  <?php
    $factor = 10;
    $nums = array_map(fn ($n) => $n * $factor, [1, 2, 3, 4]);
    // $nums = array(10, 20, 30, 40);
    echo "\n\r$nums";
    echo "$nums, ' ', $factor, PHP_EOL";
    ?>

  <?php
    $nombre = "Juan";

    function saludo()
    {
        $nombre = "dddd";
        echo "Hola $nombre<br />";
    }

    saludo();
    ?>
  <?php phpinfo(); ?>