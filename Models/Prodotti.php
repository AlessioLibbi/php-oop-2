<?php
require_once __DIR__ . "/Eatable.php";
class Prodotti
{
    public $nome;
    public $prezzo;
    public $categoria;
    public $poster;
    public $animale;

    function __construct($_nome, $_prezzo, Categoria $_categoria, $_poster, Animali $_animale)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->poster = $_poster;
        $this->animale = $_animale;
    }
}
