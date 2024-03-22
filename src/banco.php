<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';

$primeiraConta = new Conta('05809','Matewyewym',400);
var_dump($primeiraConta);
$primeiraConta-> defineCpfTitular('211312');
$primeiraConta->deposita(200) ;
$segundaConta = new Conta('22232','Miarcia');



//teste

var_dump($segundaConta);
var_dump($primeiraConta);
echo $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular();


