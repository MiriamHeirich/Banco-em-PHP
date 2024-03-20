<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo= 300;


    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
    
        $this->saldo -= $valorASacar;
    }
        public function depositar(float $valorADepositar): void
{
    if ($valorADepositar < 0) {
        echo "Valor precisa ser positivo";
        return;
    }

    $this->saldo += $valorADepositar;
}

public function transferir(float $valorATransferir, Conta $contaDestino): void
{
    if ($valorATransferir > $this->saldo) {
        echo "Saldo indisponível";
        return;
    } 

    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
}

public function recuperarSaldo():float
    {
        return $this->saldo;
    }

public function recuperarCpfTitular():string
{
    return $this-> cpfTitular;

}
public function recuperarNomeTitular():string
{
    return $this-> nomeTitular;
}

public function defineCpfTitular(string $Cpf)
{
    return $this->cpfTitular = $Cpf;
}

public function defineNomeTitular(string $nome)
{
    return $this->defineNomeTitular= $nome;
}
    
}