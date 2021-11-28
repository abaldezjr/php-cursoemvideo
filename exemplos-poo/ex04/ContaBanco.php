<?php

class ContaBanco {

    private $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso.</p>";
    }

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem {$this->getSaldo()}, não posso fechá-la.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em debito de {$this->getSaldo()}, impossível encerrar.</p>";
        } else {
            echo "<p>Conta do(a) {$this->getDono()} encerrada.</p>";
            $this->setStatus(false);
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            echo "<p>Deposito de {$valor} na conta de {$this->getDono()}.</p>";
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "<p>Conta fechada, não consigo depositar.</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                echo "<p>Saque de {$valor} foi autorizado na conta de {$this->getDono()}.</p>";
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "<p>Saldo de {$this->getSaldo()} é insuficiente para saque de {$valor}.</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus()) {
            echo "<p>Foi realizado o pagamento da mensalidade de {$valor}.</p>";
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "<p>Problemas na conta, não posso cobrar.</p>";
        }
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
        return $this;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
        return $this;
    }

}
