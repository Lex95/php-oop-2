<?php

class Tv extends Product {
    private $marca;
    private $modello;
    private $pollici;

    public function __construct($marca, $modello, $prezzo, $pollici){
        Product::__construct($marca . " " . $modello, $prezzo);
        $this->setMarca($marca);
        $this->setModello($modello);
        $this->setPollici($pollici);
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
        $this->isValidNumber($pollici);
        $this->pollici = $pollici;
    }
    public function getPollici() {
        return $this->pollici;
    }
}

?>