<?php

class Tv extends Product {
    public $marca;
    public $modello;
    public $fotocamera;


    public function __construct($nome, $prezzo, $marca, $modello, $fotocamera){
        Product::__construct($nome, $prezzo);
        $this->marca = $marca;
        $this->modello = $modello;
        $this->fotocamera = $fotocamera;
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