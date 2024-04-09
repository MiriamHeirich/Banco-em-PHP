<?php
namespace Alura\banco\Modelo;
spl_autoload_register(function (string $nomeCompletoDaClasse){
   $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
   $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
   $caminhoArquivo .= '.php';

   if(file_exists($caminhoArquivo)) {
       require_once $caminhoArquivo;
   }
});

use Alura\banco\Modelo\Conta\Titular;
use Alura\banco\Modelo\Endereco;
use Alura\banco\Modelo\CPF;
use Alura\banco\Modelo\Conta\Conta;

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');
$endereco = new Endereco('Imbituva','Morro das Pedras', 'rua A', '60');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();






