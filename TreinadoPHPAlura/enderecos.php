<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Aruja', 'bairro', 'rua', '525B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Rua', '505');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
