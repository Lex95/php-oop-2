<?php

trait Validator {
    public function isValidName($value) {
        if (!is_string($value) || $value == "") {
            throw new Exception("Nome inserito non valido!");
        }
    }
    public function isValidPsw($value) {
        if (!is_string($value)) {
            throw new Exception("Password inserita non valida!");
        } else if (strlen($value) < 5) {
            throw new Exception("Password inserita troppo corta!");
        }
    }
    public function isValidMail($value) {
        if (!strstr($value, "@")) {
            throw new Exception("Mail inserita non valida!");
        }
    }
    public function isValidNumber($value) {
        if (!is_numeric($value) || $value < 0) {
            throw new Exception("Numero inserito non valido!");
        }
    }
}

?>