<?php

require_once 'Lutador.php';

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function mesmaCategoria($l1, $l2){
        return $l1->getCategoria() === $l2->getCategoria();
    }
    
    public function mesmoLutador($l1, $l2){
        return $l1 == $l2;
    }

    public function marcarLuta($l1, $l2) {
        if($this->mesmaCategoria($l1, $l2) && !$this->mesmoLutador($l1, $l2)){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar() {
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor){
                case 0:
                    echo "<p>Os lutadores empataram</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo "<p>O lutador {$this->getDesafiado()->getNome()} venceu.</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo "<p>O lutador {$this->getDesafiante()->getNome()} venceu.</p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
            }
        } else {
            echo "<p>A luta não pode acontecer</p>";
        }   
    }
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

}
