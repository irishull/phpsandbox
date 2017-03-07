<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>

	<?php

	$var1 = 10;
	$var2 = 22;
	
	/*
	round
	ceil
	floor

	check integer with is_int function

	numeric? is_numeric
	is_float
	
	*/

	?>

	Basic Math: <?php  echo ((1 + 4 + $var1) * $var2) / 9-4; ?> <br>

	Absolute Value: <?php echo abs(0-293); ?> <br>
	Exponential: <?php echo pow(2,4); ?> <br>
	Square root: <?php echo sqrt(100); ?> <br>
	Modulo: <?php echo fmod(20,7); ?> <br>
	Random: <?php echo rand(); ?> <br>
	Random (min,max): <?php echo rand(1,60); ?> <br>


</body>
</html>