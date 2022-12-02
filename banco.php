<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Cliente;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Conta\Conta;

$endereco = new Endereco('Sarandi', 'um bairro', 'minha rua', '71B');
$cpf = new Cpf('123.456.789-00');
$gustavo = new Cliente($cpf, 'Gustavo Henrique', $endereco);
$primeiraConta = new Conta($gustavo);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeCliente() . PHP_EOL;
echo $primeiraConta->getCpfCliente() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$patricia = new Cliente(new Cpf('698.549.548-10'), 'Astolfo', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Cliente(new Cpf('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::getNumeroDeContas();
