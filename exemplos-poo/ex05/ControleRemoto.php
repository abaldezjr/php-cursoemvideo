<?php

require_once "Controlador.php";

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
        return $this;
    }

    public function getTocando() {
        return $this->tocando;
    }

    public function setTocando($tocando) {
        $this->tocando = $tocando;
        return $this;
    }

    public function abrirMenu() {
        echo "<p>Ligado:" . ($this->getLigado()?"SIM":"NÃO") ."</p>";
        echo "<p>Tocando:" . ($this->getTocando()?"SIM":"NÃO")."</p>";
        echo "<p>Volume: {$this->getVolume()}</p>";
        
    }

    public function aumentarVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro não posso aumentar o volume.</p>";
        }
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function diminuirVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>Erro não posso diminuir o volume.</p>";
        }
    }

    public function fecharMenu() {
        echo "Fechando menu";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }

}
