<?php

namespace Alura\Banco\Model;

class Pessoa
{
    private string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNomeDoCliente($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    protected function validarNomeDoCliente(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function alteraNome(string $nome): void
    {
        $this->validarNomeDoCliente($nome);
        $this->nome = $nome;
    }

}
