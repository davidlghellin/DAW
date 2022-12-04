<?php

namespace App;

//https://desarrolloweb.com/articulos/1540.php
class Caja
{
    var $alto;
    var $ancho;
    var $largo;
    var $contenido;
    var $color;

    function introduce($cosa)
    {
        $this->contenido = $cosa;
    }

    function muestra_contenido()
    {
        echo $this->contenido;
    }
}
