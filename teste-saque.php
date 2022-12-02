<?php

use Alura\Banco\Model\Conta\Cliente;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;

include_once "autoload.php";

$conta = new ContaPoupanca(
    new Cliente(
        new Cpf('123.456.789-10'),
        'Gustavo Henrique',
        new Endereco('Sarandi', 'bairro Teste', 'Rua 1', '48'),
    ),
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo();
