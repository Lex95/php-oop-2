<?php

class UserPremium extends User {
    public $scontoPersonale;

    public function setScontoPersonale($scontoPersonale) {
        $this->scontoPersonale = $scontoPersonale;
    }
    public function getScontoPersonale() {
        return $this->scontoPersonale;
    }
}

?>