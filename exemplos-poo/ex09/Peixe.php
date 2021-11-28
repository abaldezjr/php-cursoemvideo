<?php

require_once 'Animal.php';

class Peixe extends Animal {

    protected $corEscama;
    
    public function alimentar() {
        echo '<p>Comendo substancias</p>';
    }

    public function emitirSom() {
        echo '<p>Não faz som</p>';
    }

    public function locomover() {
        echo '<p>Nadando</p>';
    }
    
    public function soltarBolha() {
        echo 'Soltou uma bolha';
    }
            
            
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

}
