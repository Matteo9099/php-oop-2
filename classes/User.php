<?php
require_once __DIR__ . '/../traits/Address.php';


// dati utente
class User {

    use Address;

    public $name;
    public $lastname;
    protected $email;
    protected $discount = 0;
    protected $creditCard;

    // creo costruttore
    public function __construct($name, $lastname, $email) {
        $this->name = $name;
        $this->lastname = $lastname;

        $this->setEmail($email);
    }

    
    public function getEmail(){
        return $this->email;
    }


    // funzione che imposta email
    public function setEmail($email) {
        // verifica se l'email contiene '@' e '.'
        if(strpos($email, '@') != false && strpos($email,'.') !== false) {
            $this->email = $email;
        } else {
            echo "Indirizzo email non valido!";
        }
    }    

     
      public function getDiscount(){
        return $this->discount;
    }

    public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
    }
    
}