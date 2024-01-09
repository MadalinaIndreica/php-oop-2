<?php 
require_once __DIR__ . '/categoria.php';

class Prodotto {
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria; 
    

    function __construct ($_nome, $_prezzo, $_immagine, $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo . '€';
        $this->immagine = $_immagine;
        $this->categoria = $_categoria;
       
    }
    public function set_image($_immagine)
    {
        $this->immagine = $_immagine;
    }

    public function get_image()
    {
        return $this->immagine;
    }
}
?>