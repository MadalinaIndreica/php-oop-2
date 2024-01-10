<?php 

require_once __DIR__ . '/prodotto.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Cucce extends Prodotto {
    use Weightable;
    public $colore; 
    

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_colore, $_weight= 16)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->colore = $_colore;
        $this->weight = $_weight;
    }

}
?>