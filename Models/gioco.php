<?php 

require_once __DIR__ . '/prodotto.php';
require_once __DIR__ . '/../Traits/Weightable.php';


class Gioco extends Prodotto {
    use Weightable;
    public $grandezza; 

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_grandezza, $_weight= 5)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->grandezza = $_grandezza . 'cm';
        $this->weight = $_weight;
    }

}
?>