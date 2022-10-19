<?php

$var1 = 'Algo';
$var2 = 'Outro';

$var3 =  $var1 . ' ' . $var2 . ' ' . 12;
echo $var3;

echo "<br>";

$name = "Walter";
$profissao = "Programador";
$idade = 36;

$frase = 'O ' . $name . ' é ' . $profissao . ' e ' . ' tem ' . $idade . ' anos de idade. ';

echo $frase;

echo "<br>";

echo "O {$name} é {$profissao} e tem {$idade} anos de idade.";