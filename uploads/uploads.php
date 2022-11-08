<?php 

$photo = $_FILES['foto'];

if (move_uploaded_file($photo['tmp_name'], $photo['name']) )
echo "Sucesso!";
else 
echo "Falha";