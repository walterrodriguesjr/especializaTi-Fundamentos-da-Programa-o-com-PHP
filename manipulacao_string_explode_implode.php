<?php 

$state = 'São Paulo/SP';
$arrayState = explode('/', $state);


echo "<pre>";
print_r($arrayState);
echo "</pre>";

echo "<br>";

echo implode( "-", $arrayState);