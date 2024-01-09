<?php

class Categoria {
    public  $nome;
    public $icona; 

    public function __construct ($_nome, $_icona)
    
    {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
}
?>