<?php

function soma (float ...$valores): float{
	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "</br>";
echo soma(3,3,3);
echo "</br>";
echo soma(1.5,3,3);

?>