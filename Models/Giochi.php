<?php
require_once __DIR__ . "/Prodotti.php";
class Giochi extends Prodotti
{
    public $peso;
    public $dimensioni;

    function __construct($_peso, $_dimensioni, $_nome, $_prezzo, Categoria $_categoria, $_poster, Animali $_animale)
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_poster, $_animale);
        $this->peso = $_peso;
        $this->dimensioni = $_dimensioni;
    }
}
