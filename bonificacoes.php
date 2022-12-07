<?php

require_once "autoload.php";

use Alura\Banco\Model\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Alura\Banco\Model\{Cpf, Endereco, Pessoa};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umDesenvolvedor = new Desenvolvedor(
    "Gustavo Henrique",
    new Cpf("123.456.789-10"),
    "Desenvolvedor",
    1000 );

$umDiretor = new Diretor(
    "Hebert Richards",
    new Cpf("321.654.987-01"),
    "Diretor",
    10000);

$umGerente = new Gerente(
    "Anderson Silva",
    new Cpf("111.222.333-01"),
    "Gerente de Projetos",
    5000);

$umDesenvolvedor->sobeDeNivel();
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);



echo $controlador->getTotalBonificacoes();
