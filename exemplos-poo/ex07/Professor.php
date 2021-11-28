<?php

class Professor extends Pessoa {
    
    private $especializacao;
    private $salario;
    
    public function receberAumento($aumento) {
        $this->setSalario($this->getSalario() + $aumento);
    }
    
    public function getEspecializacao() {
        return $this->especializacao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecializacao($especializacao): void {
        $this->especializacao = $especializacao;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }
    
}
