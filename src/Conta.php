<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;
    private static $numeroDeContas = 0;//atributo estatico da classe
    
    public function __construct(string $cpfTitular, string $nomeTitular)//construtor
    { 
        $this->saldo=0;
        $this->nomeTitular = $nomeTitular;
        $this-> validaNomeTitular($nomeTitular);
        $this-> $cpfTitular = $cpfTitular;
        $this-> validaCpfTitular($cpfTitular);
         self::$numeroDeContas ++;
    }
    


    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) 
        {
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    // public function defineCpfTitular(string $cpf): void
    // {
    //     $this->cpfTitular = $cpf;
    // }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    // public function defineNomeTitular(string $nome): void
    // {
    //     $this->nomeTitular = $nome;
    // }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaCpfTitular($cpfTitular)
    {
        if (strlen($cpfTitular )<> 11)
                {
                    echo "Tamanho de Cpf Inválido";
                    exit();
                }
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular)<5)
        {
            echo "Nome inválido";
            exit();
        }
    }
    
    public static function recuperaNumeroDeContas ():int
        {
            return Conta::$numeroDeContas;
        }

}