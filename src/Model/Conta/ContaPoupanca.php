<?php

namespace Alura\Banco\Model\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa()
    {
        return 0.03;
    }
}
