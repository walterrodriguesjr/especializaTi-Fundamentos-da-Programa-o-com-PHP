<?php 

echo "<br>";

for($i = 0; $i <=10; $i++){
    echo "{$i} <br>";
}

echo "<br>";

$names = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f'
];

for ($g=0; $g < count($names) ; $g++) { 
    echo "$names[$g] <br>";
}