
<?php

class Conta {
    private string $cpfTitular;
    private  string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Insuficiente!!!";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if($valorADepositar <= 0) {
            echo "Valor inválido!!!";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        //else {$contaDestino->saldo += $valorATransferir and $this->saldo -= $valorATransferir};

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setCpfTitular(string $cpfTitular): void
    {
        $this->cpfTitular = $cpfTitular;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

}
