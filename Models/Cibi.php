<?php
require_once __DIR__ . "/Prodotti.php";
class Cibi extends Prodotti
{
    public $sapore;

    function __construct($_sapore, $_nome, $_prezzo, Categoria $_categoria, $_poster, Animali $_animale)
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_poster, $_animale);
        $this->sapore = $_sapore;
    }
}
