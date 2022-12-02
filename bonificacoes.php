<?php

require_once "autoload.php";

use Alura\Banco\Model\{Cpf, Funcionario};
use Alura\Banco\Service\BonificacoesController;

$umFuncionario = new Funcionario(
    "Gustavo Henrique",
    new Cpf("123.456.789-10"),
    "Desenvolvedor",
    1000 );

$outroFuncionario = new Funcionario(
    "Hebert Richards",
    new Cpf("321.654.987-01"),
    "Gerente de Projetos",
    10000);

$controlador = new BonificacoesController();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($outroFuncionario);

echo $controlador->getTotalBonificacoes();
