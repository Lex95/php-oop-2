<?php

class Product {
    public $id;
    public $nomeProdotto;
    public $prezzo;
    public $sconto = NULL;
    public $prezzoFinale = NULL;
    static $count = 0;

    public function __construct($nome, $prezzo) {
        $this->nomeProdotto = $nome;
        $this->prezzo = $prezzo;
        $this->setId();
    }
    private function setId() {
        $this->id = Product::$count++;
    }
    public function getID() {
        return $this->id;
    }
    public function setNomeProdotto($nome) {
        $this->nomeProdotto = $nome;
    }
    public function getNomeProdotto() {
        return $this->nome;
    }
    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }
    public function getPrezzo() {
        return $this->prezzo;
    }
    public function setSconto($sconto) {
        $this->sconto = $sconto;
        $this->prezzoFinale = $this->prezzo - $sconto;
    }
    public function getSconto() {
        return $this->sconto;
    }
    public function getPrezzoFinale() {
        return $this->prezzoFinale;
    }
}

?>