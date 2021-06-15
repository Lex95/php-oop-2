<?php

class User {
    public $id;
    public $username;
    public $password;
    public $mail;
    static protected $count = 0;

    public function __construct($username, $password, $mail) {
        $this->setId();
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setMail($mail);
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
}

?>