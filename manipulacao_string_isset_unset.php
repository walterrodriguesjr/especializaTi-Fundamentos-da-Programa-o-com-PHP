<?php 

$name = "Walter";

if(isset($name)){
    echo "A variável existe.";
}else{
    echo "A variável não existe.";
}

echo "<br>";

unset($name);

echo "<br>";

if(isset($name)){
    echo "A variável existe.";
}else{
    echo "A variável não existe.";
}