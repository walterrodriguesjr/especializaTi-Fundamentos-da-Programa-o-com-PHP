<?php 

$file = fopen('projetoX.log', 'a+');

fwrite($file, 'Hoje');

fclose($file);
