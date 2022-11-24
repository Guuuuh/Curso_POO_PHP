<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("11122233300", "Gustavo");
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->nomeTitular . PHP_EOL;
echo $primeiraConta->cpfTitular . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta("44455566600", "Adalberto");
new Conta("77788899900", 'Teste');

echo Conta::getNumeroDeContas();