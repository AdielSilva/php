<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade'=> 20 
));

array_push($pessoas, array(
	'nome' => 'Adiel',
	'idade'=> 22 
));

echo json_encode($pessoas);
?>