<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo {

    private $titulo;
    private $views;
    private $avaliacao;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->setViews(0);
        $this->avaliacao = 0;
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        $this->setReproduzindo(false);
    }

    public function play() {
        $this->setReproduzindo(true);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getViews() {
        return $this->views;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setViews($views): void {
        $this->views = $views;
    }

    public function setAvaliacao($avaliacao): void {
        $this->avaliacao = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
    }

    public function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }

}
