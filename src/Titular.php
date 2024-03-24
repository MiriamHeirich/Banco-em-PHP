<?php

Class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this $cpf->$cpf;
        $this $nome->$nome;
    }

    public function getCpf(): string//getter
    {
        return $this->cpf;
    }

    
    public function getNome(): string//getter
    {
        return $this->nome;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular)<5)
        {
            echo "Nome inválido";
            exit();
        }
    }
    

}