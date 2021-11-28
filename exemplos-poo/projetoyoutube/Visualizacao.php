<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {

    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->maisUmaView();
        $this->maisUmTotalAssistido();
    }

    public function avaliar() {
        $this->getFilme()->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->getFilme()->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porcentagem) {
        $nota = 3;
        if ($porcentagem >= 20 && $porcentagem <= 50) {
            $nota = 5;
        } elseif ($porcentagem <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }
        $this->getFilme()->setAvaliacao($nota);
    }

    public function maisUmaView() {
        $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
    }

    public function maisUmTotalAssistido() {
        $this->getEspectador()->setTotalAssistido($this->getEspectador()->getTotalAssistido() + 1);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }

}
