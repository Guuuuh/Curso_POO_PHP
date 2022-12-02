<?php

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa() : float
    {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
