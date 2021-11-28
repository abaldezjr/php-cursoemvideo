<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {
    
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p>Bolsa do(a) {$this->getNome()} foi renovada.</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }
    
}
