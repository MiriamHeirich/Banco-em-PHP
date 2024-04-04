<?php
namespace Alura\banco\Modelo;
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\Banco-em-PHP\src\Modelo\Conta\Conta.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\Banco-em-PHP\src\Modelo\Conta\Titular.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Modelo\Cpf.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Modelo\Endereco.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');
$endereco = new Endereco('Imbituva','Morro das Pedras', 'rua A', '60');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();






