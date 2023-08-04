<?php

require 'Paciente.php';
require 'IMC.php';

$pessoaUm = new Paciente("João", 60, 1.8);
$imcPessoaUm = IMC::calcImc($pessoaUm);
$classificacaoPessoaUm = IMC::classificaPorImc($pessoaUm);
var_dump($imcPessoaUm);
var_dump($classificacaoPessoaUm);


