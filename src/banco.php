<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Titular.php';
require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Cpf.php';

$primeiraConta = new Conta(new Titular (new Cpf ('058.093.333-33')),'Matewyewym',400);
$primeiraConta->deposita(200) ;
$segundaConta = new Conta(new Titular(new Cpf('222.328.888-88')),'Miarcia',100);

var_dump($segundaConta);

var_dump($primeiraConta);





