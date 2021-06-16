<?php

require_once "validator.php";
class creditCard {
    private $nomeCarta;
    private $saldo;

    use Validator;

    public function __construct($nome, $saldo) {
        $this->isValidName($nome);
        $this->nomeCarta = $nome;
        $this->isValidNumber($saldo);
        $this->saldo = $saldo;
    }
    public function getNome() {
        return $this->nomeCarta;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function effettuaPagamento($costo) {
        if ($costo > $this->saldo) {
            return "Pagamento fallito: saldo carta insufficiente";
        } else {
            $this->saldo -= $costo;
            return "Pagamento riuscito";
        }
    }
}

?>