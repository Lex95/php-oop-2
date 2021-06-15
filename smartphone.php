<?php

class Smartphone extends Product {
    public $marca;
    public $modello;
    public $fotocamera;

    public function __construct($marca, $modello, $prezzo, $fotocamera){
        Product::__construct($marca . " " . $modello, $prezzo);
        $this->setMarca($marca);
        $this->setModello($modello);
        $this->setFotocamera($fotocamera);
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
    public function setFotocamera($fotocamera) {
        $this->fotocamera = $fotocamera;
    }
    public function getFotocamera() {
        return $this->fotocamera;
    }
}

?>