<?php

trait Weightable {
    private $weight;

    public function setWeight($_weight) {
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            throw new Exception ('Carattere errato! Il peso deve essere un numero positivo');
        }
    }

    public function getWeight() {
        return $this->weight . 'kg';
    }
}
?>