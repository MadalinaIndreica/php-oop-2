<?php 

require_once __DIR__ . '/prodotto.php';

class Cibo extends Prodotto {
    public $tipologia; 

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_tipologia)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->tipologia = $_tipologia;
    }

}