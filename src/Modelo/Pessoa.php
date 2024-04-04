<?php
namespace Modelo;
class Pessoa
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): string
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): string
    {
        $this->nome = $nome;

        return $this;
    }
   }