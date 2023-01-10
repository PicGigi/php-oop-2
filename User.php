<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;

    function __contsruct($_nome, $_cognome, $_email) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

}

$pinco = new User ('Pinco', 'Pallino', 'pincpall@gmail.com');
$tizio = new Registered ('Tizio','Caio','tizio@mail.it');
echo $pinco;