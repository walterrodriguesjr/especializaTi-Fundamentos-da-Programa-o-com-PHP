<?php 
/* maneira antiga */
/* $cars = array(1, 'Carlos', 1.2);

var_dump($cars); */

/* maneira recente */
/* $carros = ['Uno', 'Gol', 'Pálio'];
var_dump($carros); */

/* usando chave e valor */

/* $car = [
    'cor' => 'azul',
    'portas' => '4',
    'ano' => 2018
];
print_r($car); */

echo ("<br>");

$car = [
    'ford' => [
        'cor' => 'vermelho',
        'ano' => 2000,
        'modelo' => 'Fiesta'
    ],
    'Volskwagen' => [
        'cor' => 'cinza',
        'ano' => 2005,
        'modelo' => 'Gol'
    ],
];

print_r($car['ford']);