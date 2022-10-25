<?php 

$taxa = 2;

function sum(int $n1, int $n2){
    global $taxa;
    return ($n1 + $n2) * $taxa;
}

echo sum(2, 3);

echo "<br>";
