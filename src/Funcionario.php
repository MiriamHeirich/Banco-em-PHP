<?php
class Funcionario
{
   private string $nome;
   private string $cpf;
   private string $cargo;


    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}