<?php

require_once 'src/Conta.php';
require_once 'src/Cliente.php';

$cpf = new Cpf('111.222.333-00');
$cliente = new Cliente($cpf,  nome: 'Gustavo Henrique');

$primeiraConta = new Conta($cliente);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

var_dump($primeiraConta);

echo Conta::getNumeroDeContas();
