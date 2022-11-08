<?php 

if($_REQUEST['nome'] != '' && strlen($_REQUEST['nome']) > 3){

var_dump($_REQUEST['nome']);
echo "<hr>";
var_dump($_REQUEST['senha']);
echo "<hr>";
var_dump($_REQUEST['email']);
echo "<hr>";
var_dump($_REQUEST['concordo']);
echo "<hr>";
var_dump($_REQUEST['sexo']);
echo "<hr>";
var_dump($_REQUEST['estado']);
echo "<hr>";
var_dump($_REQUEST['descricao']);
echo "<hr>";
}else{
   echo 'Erro de validação'; 
    
}

/* var_dump($_POST['nome']);
echo "<hr>";
var_dump($_POST['senha']);
echo "<hr>";
var_dump($_POST['email']);
echo "<hr>";
var_dump($_POST['concordo']);
echo "<hr>";
var_dump($_POST['sexo']);
echo "<hr>";
var_dump($_POST['estado']);
echo "<hr>";
var_dump($_POST['descricao']);
echo "<hr>"; */