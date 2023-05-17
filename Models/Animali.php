<?php
require_once __DIR__ . "/Prodotti.php";
class Animali
{
    public $genere;
    public $tipo;

    function __construct($_cane, $_tipo,)
    {
        $this->genere = $_cane;
        $this->tipo = $_tipo;
    }
}
