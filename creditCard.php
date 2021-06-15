<?php

class creditCard {
    public $nomeCarta;
    public $saldo;

    public function __construct($nome, $saldo) {
        $this->nomeCarta = $nome;
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