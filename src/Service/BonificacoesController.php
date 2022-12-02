<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario;

class BonificacoesController
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}