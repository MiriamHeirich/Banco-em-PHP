<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';

$primeiraConta = new Conta('05809333333','Matewyewym',400);
$primeiraConta->deposita(200) ;
$segundaConta = new Conta('22232888888','Miarcia');

var_dump($segundaConta);

var_dump($primeiraConta);





