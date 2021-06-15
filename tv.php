<?php

class Tv extends Product {
    public $marca;
    public $modello;
    public $pollici;

    public function __construct($nome, $prezzo, $marca, $modello, $pollici){
        Product::__construct($nome, $prezzo);
        $this->marca = $marca;
        $this->modello = $modello;
        $this->pollici = $pollici;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getMarca() {
        return $this->marca;
    }
    public function setModello($modello) {
        $this->modello = $modello;
    }
    public function getModello() {
        return $this->modello;
    }
    public function setPollici($pollici) {
        $this->pollici = $pollici;
    }
    public function getPollici() {
        return $this->pollici;
    }
}

?>