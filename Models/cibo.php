<?php 

require_once __DIR__ . '/prodotto.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Cibo extends Prodotto {
    use Weightable;

    public $tipologia; 
    

    function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_tipologia, $_weight= 0)
    {
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);
        $this->tipologia = $_tipologia;
        $this->weight = $_weight;
    }

}

?>