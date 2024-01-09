<?php 

require_once __DIR__ . '/prodotto.php';


class Gioco extends Prodotto {
    public $grandezza; 

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_grandezza)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->grandezza = $_grandezza . 'cm';
    }

}
?>