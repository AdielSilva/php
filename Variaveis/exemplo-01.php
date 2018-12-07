<?php

$nome = "Adiel";
$sobrenome = "Silva";

$nomeCompleto = $nome ." ". $sobrenome;

echo $nome;

echo $nomeCompleto;

exit;
var_dump($nome); //mostra o conteudo da variavel, o tamanho ocupado e seu formato

unset($nome); // vai limpar a variavel da memória
if(isset($nome)){

echo $nome;

}


?>