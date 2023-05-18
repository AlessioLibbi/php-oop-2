<?php
require_once __DIR__ . "/Prodotti.php";
require_once __DIR__ . "/Eatable.php";
class Cibi extends Prodotti
{
    use Eatable;
    public $sapore;

    function __construct($_sapore, $_nome, $_prezzo, Categoria $_categoria, $_poster, Animali $_animale, $_eatable)
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_poster, $_animale);
        $this->sapore = $_sapore;
        $this->setEatable($_eatable);
    }
}
