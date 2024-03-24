<?php

class Conta
{
    private $titular;

    private $saldo = 0;
    private static $numeroDeContas = 0;//atributo estatico da classe
    
    public function __construct(Titular $Titular)//construtor
    { 
        $this->saldo=0;
        $this->titular = $Titular;
        $this->validaNomeTitular($nome);
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

    private function validaCpfTitular($cpfTitular)
    {
        if (strlen($cpfTitular )<> 11)
                {
                    echo "Tamanho de Cpf Inválido";
                    exit();
                }
    }
     public static function recuperaNumeroDeContas ():int
        {
            return Conta::$numeroDeContas;
        }

    public function recuperaCpfTitular(string $cpf)
    {
        return $this->titular->getCpf();
    }

    public function recuperaNomeTitular(string $cpf)
    {
        return $this->titular->getNome();
    }

}