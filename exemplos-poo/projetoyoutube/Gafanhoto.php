<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa {

    private $login;
    private $totalAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotalAssistido(0);
    }

    public function assistiuMaisUm() {
        $this->setTotalAssistido($this->getTotalAssistido() + 1);
    }

    public function getLogin() {
        return $this->login;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotalAssistido($totalAssistido): void {
        $this->totalAssistido = $totalAssistido;
    }

}
