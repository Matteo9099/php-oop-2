<?php

class CreditCard {

    protected $expirationMonth;
    protected $expirationYear;
    protected $cvv;
    protected $number;
    public $owner;


    public function getExpirationMonth(){
        return $this->expirationMonth;
    }

    // verifica sul mese della carta di credito
    public function setExpirationMonth($number){
        if(is_numeric($number) && $number >= 1 && $number <= 12) {
            $this->expirationMonth = $number;
        }
    }

    public function getExpirationYear(){
        return $this->expirationYear;
    }

    // verifica sull'anno della carta di credito
    public function setExpirationYear($number){
        if(is_numeric($number) && $number >= 0 && $number <= 99) {
            $this->expirationYear = $number;
        }
    }

    public function getCvv(){
        return $this->cvv;
    }

    // verifica del codice cvv
    public function setCvv($cvv) {
        if(is_numeric($cvv) && $cvv >= 0 && $cvv <= 999) {
            $this->cvv = $cvv;
        }
    }

    public function getNumber(){
        return $this->number;
    }

    // verifica che il numero della carta sia un numero ed abbia 16 caratteri
    public function setNumber($number) {
        if(is_numeric($number) && strlen($number) == 16) {
            $this->number = $number;
        }
    }

    // verifica se la carta sia valida o scaduta
    public function isExpired() {

        $expires = DateTime::createFromFormat('m-y', $this->expirationMonth . '-' . $this->expirationYear);
        $now = new DateTime();

        if($expires < $now) {
            throw new Exception('Carta di credito scaduta!');
        }

      
    }

    


}