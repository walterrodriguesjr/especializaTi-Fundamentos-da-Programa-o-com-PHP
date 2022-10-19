<?php 

$nomes = [
    'Carlos',
    'EspecializaTi',
    'Company'
];

print_r($nomes);

echo "<br>";

$nome = "Walter";
$idade = 36;
$cidade = "Curitiba";

$dados = compact('nome', 'idade', 'cidade');
print_r($dados);

echo "<br>";

var_dump(is_array($dados));

echo "<br>";

var_dump(in_array('Walter', $dados));