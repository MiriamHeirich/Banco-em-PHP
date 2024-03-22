<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';

$primeiraConta = new Conta('05806812979','Miriam',400);
var_dump($primeiraConta);
$primeiraConta->deposita(200) ;
$segundaConta = new Conta('22232','Miarcia');



//teste

var_dump($segundaConta);
echo $primeiraConta->recuperaSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular();


