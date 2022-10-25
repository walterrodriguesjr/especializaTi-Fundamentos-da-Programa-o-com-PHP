<?php

function pt($value)
{
    return $value . "<br>";
};

echo pt("retornando a string de parâmetro");
echo pt(223323);
echo pt("terceira linha");

function sum(int $n1, int $n2) {
    return $n1 + $n2;
};

echo sum(10, 5);
