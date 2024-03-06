<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$lorenzo = new Titular(new CPF('123.456.789-10'), 'Lorenzo Gomes');
$primeiraConta = new Conta($lorenzo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$gabriel = new Titular(new CPF('698.549.548-10'), 'Gabriel');
$segundaConta = new Conta($gabriel);
var_dump($segundaConta);


