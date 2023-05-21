<?php
require_once __DIR__ . "/Prodotti.php";
class Cuccie extends Prodotti
{
    public $colore;
    public $altezza;
    use Eatable;

    function __construct($_colore, $_altezza, $_nome, $_prezzo, Categoria $_categoria, $_poster, Animali $_animale, $_eatable)
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_poster, $_animale);
        $this->colore = $_colore;
        $this->altezza = $_altezza;
        $this->setEatable($_eatable);
    }
}
