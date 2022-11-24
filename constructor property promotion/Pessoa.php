// Constructor Property Promotion Example
<?php

class Pessoa
{
// os atributos são iniciados nos parametros do construtor;
    public function __construct(
        public string $email,
        public string $nome,
        public string $cpf,
    ) {}
}

$pessoa1 = new Pessoa('email@gmail.com', 'Teste', '12345678900');
var_dump($pessoa1);
