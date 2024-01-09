<?php 

require_once __DIR__ . '/prodotto.php';


class Cucce extends Prodotto {
    public $colore; 

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_colore)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->colore = $_colore;
    }

}