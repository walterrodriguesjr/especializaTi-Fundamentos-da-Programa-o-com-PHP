<?php 

$salt = "senha";
$password = '12345';
echo md5($password);

echo "<br>";

echo sha1($password);

echo "<br>";

echo crypt($password, $salt);

echo "<br>";

$passCr = base64_encode($password);
echo $passCr;

echo "<br>";

$passCr = base64_decode($passCr);
echo $passCr;

echo "<br>";

echo hash('sha512', $password);