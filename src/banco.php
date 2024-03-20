<?php

require_once 'C:\Users\MiriamHeirich\Desktop\AulaPHP\src\Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(100) ;
$primeiraConta->defineCpfTitular('05806812979');





echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();
