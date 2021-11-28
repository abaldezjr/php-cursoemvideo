<?php

require_once 'Animal2.php';

class Mamifero extends Animal2 {
    
    protected $corPelo;
    
    public function emitirSom() {
        echo '<p>Som de mamifero</p>';
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

    public function alimentar() {
        
    }

    public function locomover() {
        
    }

}
