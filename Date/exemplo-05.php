<?php

$dt = new DateTIme();

$periodo = new DateInterval("P15D");

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); 

echo "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s"); 

?>