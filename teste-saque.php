<?php
require_once 'autoload.php';
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;


// $conta = new Conta(
//     new Titular(
//         new CPF('123.456.789-10'),
//         'Vinicius Dias', 
//         new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
//     )
// );
 $conta= new CPF('129.789.123.77');
$conta->depositar('500');
$conta->sacar('100');   