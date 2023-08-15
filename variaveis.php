<?php

$nomeCompleto = 'Edson Rodrigues';
$idade = 40;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";
//Converte em maiusculo
echo strtoupper($nomeCompleto);

echo "<hr>";
//Converte em minusculo
echo strtolower($nomeCompleto);

echo "<hr>";

//converte a primeira letra em maiusculo
echo ucwords($nomeCompleto);

echo"<hr>";

//subistitue um elemento por outro
echo str_replace("Edson", "joão", $nomeCompleto);

echo"<hr>";

//repete um termo
echo str_repeat("Edson ",5);

echo"<hr>";

//fala se a variavel existe
echo isset($nome) ? 'True':'False';

echo"<hr>";

//se esta vazio
echo empty($nomeCompleto) ? 'True':'False';
?>