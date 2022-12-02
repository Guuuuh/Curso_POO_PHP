<?php

namespace Alura\Banco\Model\Conta;

class Conta
{
    private Cliente $cliente;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorDoSaque = $valorASacar + $tarifaDeSaque;
        if ($valorDoSaque > $this->saldo) {
            echo "Saldo Insuficiente!!!";
            return;
        }

        $this->saldo -= $valorDoSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo "Valor inválido!!!";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        //else {$contaDestino->saldo += $valorATransferir and $this->saldo -= $valorATransferir};

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

    public function getNomeCliente(): string
    {
        return $this->cliente->getNome();
    }

    public function getCpfCliente() : string
    {
        return $this->cliente->getCpf();
    }

    protected function percentualTarifa()
    {
        return 0.05;
    }
}
