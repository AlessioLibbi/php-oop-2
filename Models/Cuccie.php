<?php
require_once __DIR__ . "/Prodotti.php";
class Cuccie extends Categoria
{
    public $casetta;
    public $cuscino;

    function __construct($_casetta, $_cuscino, $_nome, $_prezzo, $_poster)
    {
        parent::__construct($_nome, $_prezzo, $_poster);
        $this->casetta->$_casetta;
        $this->cuscino->$_cuscino;
    }
}
