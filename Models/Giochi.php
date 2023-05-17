<?php
require_once __DIR__ . "/Prodotti.php";
class Giochi extends Categoria
{
    public $palla;
    public $corda;

    function __construct($_palla, $_corda, $_nome, $_prezzo, $_poster)
    {
        parent::__construct($_nome, $_prezzo, $_poster);
        $this->palla->$_palla;
        $this->corda->$_corda;
    }
}
