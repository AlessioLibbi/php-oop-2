<?php
require_once __DIR__ . "/Prodotti.php";
class Cibi extends Categoria
{
    public $sapore;

    function __construct($_sapore, $_nome, $_prezzo, $_poster)
    {
        parent::__construct($_nome, $_prezzo, $_poster);
        $this->sapore->$_sapore;
    }
}
