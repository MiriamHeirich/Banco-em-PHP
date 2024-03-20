<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\Banco-em-PHP\src\Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(100) ;
$primeiraConta->defineCpfTitular('05806812979');


//teste


echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();
