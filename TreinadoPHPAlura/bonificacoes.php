<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Lorenzo Gomes',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Gabriel',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Paula',
    new CPF('123.951.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Pedro',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
