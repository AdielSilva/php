<!DOCTYPE html>
<html>
<head>
	<style>
	h2 {
	font: 12pt comic;
	color: blue;
	}
</style>
	<title></title>
</head>
<body>
<?php

$valor1 = $_GET["x1"];
$valor2 = $_GET["x2"];
echo "<h2>valor </h2> ". ($valor1 + $valor2);
echo "</br> o valor absoluto de $valor1 é". abs($valor1);
echo "</br> o valor de $valor1 em moeda é ". number_format($valor1,2)
?>
</body>
</html>