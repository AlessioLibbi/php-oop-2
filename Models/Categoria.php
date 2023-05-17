<?php
require_once __DIR__ . "/Prodotti.php";
class Categoria extends Prodotti
{
    public $cibo;
    public $giochi;
    public $cuccie;

    function __construct(Cibi $_cibo, Giochi $_giochi, Cuccie $_cuccie)
    {
        $this->cibo->$_cibo;
        $this->giochi->$_giochi;
        $this->cuccie->$_cuccie;
    }
}
