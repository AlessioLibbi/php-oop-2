<?php
require_once __DIR__ . "/Prodotti.php";
class Categoria
{
    public $nome;


    function __construct($_nome)
    {
        $this->nome = $_nome;
    }
}
