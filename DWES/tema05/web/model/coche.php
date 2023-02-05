<?php
class Coche
{
    // constantes
    const TIPO = 'COCHE';
    // static
    private static $num_asientos = 0;
    // si es privado sólo se podrá acceder a él desde los métodos de la propia clase, 
    // utilizando la palabra self. De la misma forma que $this hace referencia al objeto actual, self hace referencia a la clase actual.
    public static function incrementa() {
        self::$num_asientos++;
    }
    private $codigo;
    public $nombre;
    public $pvp;
    public function muestra()
    {
        echo "<p>" . $this->nombre . "</p>";
    }

    public function setCodigo($nuevo_codigo)
    {
        if ($nuevo_codigo == null) {
            $this->codigo = $nuevo_codigo;
            return true;
        }
        return false;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    // métodos mágicos
    // https://www.php.net/manual/es/language.oop5.magic.php
    // https://diego.com.es/metodos-magicos-en-php

    // constructor con distinto numero de argumentos
    public function __construct()
    {
        $num = func_num_args(); //guardamos el número de argumentos
        switch ($num) {
            case 0:
                break;
            case 1:
                //recuperamos el argumento pasado
                $this->nombre = func_get_arg(0); // los argumentos empiezan a contar por 0
                break;
            case 2:
                $this->nombre = func_get_arg(0);
                $this->pvp = func_get_arg(1);
        }
    }
    // tambien tenemos los destructores,
    // que debe llamarse "__destruct" y permite definir acciones que se ejecutarán cuando se elimine el objeto
}
