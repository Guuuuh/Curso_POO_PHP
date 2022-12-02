<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
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

    abstract protected function percentualTarifa() : float;
}
