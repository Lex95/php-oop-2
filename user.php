<?php

class User {
    protected $id;
    protected $username;
    protected $password;
    protected $mail;
    protected $carrello = [];
    protected $carta;
    static protected $count = 0;

    public function __construct($username, $password, $mail, $carta) {
        $this->setId();
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setMail($mail);
        $this->carta = $carta;
    }
    private function setId() {
        $this->id = User::$count++;
    }
    public function getID() {
        return $this->id;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setMail($mail) {
        $this->mail = $mail;
    }
    public function getMail() {
        return $this->mail;
    }
    public function getCarta() {
        return $this->carta;
    }
    public function aggiungiAlCarrello($prodotto) {
        $this->carrello[] = $prodotto;
    }
    public function getTotaleCarrello() {
        $totale = 0;
        for ($i = 0; $i < count($this->carrello); $i++) {
            $totale += $this->carrello[$i]->getPrezzo();
        }
        return $totale;
    }
}

?>