<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';

$primeiraConta = new Conta();
var_dump($primeiraConta);
$primeiraConta->deposita(200) ;
$primeiraConta->defineCpfTitular('05806812979');


//teste


echo $primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular();


