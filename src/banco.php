<?php

require_once 'C:\Users\joaod\OneDrive\Área de Trabalho\AulaPHP\Banco-em-PHP\src\Conta.php';
require_once 'C:\Users\joaod\OneDrive\Área de Trabalho\AulaPHP\Banco-em-PHP\src\Titular.php';
require 'C:\Users\joaod\OneDrive\Área de Trabalho\AulaPHP\Banco-em-PHP\src\Cpf.php';

$primeiraConta = new Conta(new Titular (new Cpf ('05809333333','Matewyewym',400)));
$primeiraConta->deposita(200) ;
$segundaConta = new Conta(new Titular(new Cpf('22232888888','Miarcia')));

var_dump($segundaConta);

var_dump($primeiraConta);





