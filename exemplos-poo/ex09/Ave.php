<?php

require_once 'Animal.php';

class Ave extends Animal {

    protected $corPena;
    
    public function alimentar() {
        echo '<p>Comendo frutas</p>';
    }

    public function emitirSom() {
        echo '<p>Comendo de ave</p>';
    }

    public function locomover() {
        echo '<p>Voando</p>';
    }
    
    public function fazerNinho() {
        echo 'Construindo um ninho';
    }
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }

}
