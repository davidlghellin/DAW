<?php
class TV extends Producto implements iMuestra /*,iOtraInterface */
{
    public $pulgadas;
    public $tecnologia;
    public function __construct($row)
    {
        parent::__construct($row); //llama al constructor de la clase padre
        $this->pulgadas = $row['pulgadas'];
        $this->tecnologia = $row['tecnologia'];
    }
    public function muestra()
    {
        echo "<p>" . $this->pulgadas . " pulgadas</p>";
    }
    
}
