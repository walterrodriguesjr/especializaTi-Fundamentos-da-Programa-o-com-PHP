<?php 

$infoCompany = [
    'name' => 'EspecializaTi',
    'founder' => 'Carlos',
    'Year_current' => 2018
];
$infoCompanyTwo = [
    'courses' => ['PHP', 'JS', 'Java'],
    'total_courses' => 26,
];

var_dump(array_keys($infoCompany));

echo "<br>";

var_dump(array_values($infoCompany));

echo "<br>";

var_dump(count($infoCompany));

echo "<br>";
echo "<br>";

echo "<pre>";
var_dump(array_merge($infoCompany, $infoCompanyTwo));
echo "</pre>";

echo "<br>";

$cart = [
    'Arroz', 
    'Sabão', 
    'Feijão',
    'Balinhas'
];

$loja = [
    'camiseta',
    'calça',
    'meias'
];

$item = [
    1 => 'Carro',
    2 => 'Moto',
    3 => 'Barco'
];

echo "<pre>";
(var_dump($cart));
echo "</pre>";

echo "<br>";

echo "<pre>";
(array_pop($cart));
echo "</pre>";

var_dump($cart);

echo "<br>";

echo "<pre>";
(array_shift($cart));
echo "</pre>";

var_dump($cart);

echo "<br>";

unset($cart[0]);

echo "<pre>";
(var_dump($cart));
echo "</pre>";

echo "<br>";

array_push($cart, 'Tapete');

echo "<pre>";
(var_dump($cart));
echo "</pre>";

echo "<br>";

array_unshift($cart, 'Microondas');

array_unshift($cart, 'Microondas');

echo "<pre>";
(var_dump($cart));
echo "</pre>";

echo "<br>";

$cart = array_unique($cart);

echo "<pre>";
(var_dump($cart));
echo "</pre>";

echo "<br>";

arsort($loja);

var_dump($loja);

echo "<br>";

asort($loja);

var_dump($loja);

echo "<br>";

sort($item);

var_dump($item);

echo "<br>";









