<?php

$nome = "Adiel";

$nome2 = 'aspa simples';

echo "abc $nome $nome2 </br>"; 

$nome3 = "teste para caixa alta";
$nome4 = "CAIXA BAIXA";
$nome5 = "Adiel Nascimento da Silva";

$nome4 = strtolower($nome4); //diminui as casas para caixa baixa
$nome5 = ucwords($nome5); // Deixa primeira letra de cada palavra maiuscula


echo strtoupper($nome3); //aumenta caixa do texto
echo "</br> ". $nome4;
echo "</br> $nome5";

$nome4 = str_replace("a", "4", $nome4);

echo "</br> $nome4 </br>";

$frase = "a repetição é a mãe da retenção";

$q = strpos($frase, "mãe"); //pegando posição de onde começa a palvra "mãe"

$texto = substr($frase, 0, $q); // (alvo, daonde começa, até onde)
$texto2 = substr($frase, $q);
var_dump($q);
echo $texto;
echo "</br> $texto2"; 
?>