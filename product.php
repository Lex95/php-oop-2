<?php

require_once "validator.php";
class Product {
    protected $id;
    protected $nomeProdotto;
    protected $prezzo;
    protected $sconto = NULL;
    static protected $count = 0;

    use Validator;

    public function __construct($nome, $prezzo) {
        $this->setNomeProdotto($nome);
        $this->setPrezzo($prezzo);
        $this->setId();
    }
    private function setId() {
        $this->id = Product::$count++;
    }
    public function getID() {
        return $this->id;
    }
    public function setNomeProdotto($nome) {
        $this->isValidName($nome);
        $this->nomeProdotto = $nome;
    }
    public function getNomeProdotto() {
        return $this->nomeProdotto;
    }
    public function setPrezzo($prezzo) {
        $this->isValidNumber($prezzo);
        $this->prezzo = $prezzo;
    }
    public function getPrezzo() {
        return $this->prezzo;
    }
    public function setSconto($sconto) {
        $this->isValidNumber($sconto);
        $this->sconto = $sconto;
        $this->prezzo -= $sconto;
    }
    public function getSconto() {
        return $this->sconto;
    }
}

?>