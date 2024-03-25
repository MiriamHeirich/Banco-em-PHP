<?php
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Cpf.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Endereco.php';

Class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string//getter
    {
        return $this->cpf-> recuperaCpfTitular;
    }

    
    public function getNome(): string//getter
    {
        return $this->nome;
    }

    private function validaNomeTitular($nome)
    {
        if (strlen($nome)<5)
        {
            echo "Nome inválido";
            exit();
        }
    }
    
    public function getEnderecoTitular()
    {
        
    }

}