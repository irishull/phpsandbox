<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>

	<?php

	$numbers = array(2,4,5,6,7,39);
	echo $numbers[1];

	$numbers[3] = 40;
	$numbers[] = "fart";
	// for dev you can use print_r function to print array contents
	echo print_r($numbers);

	$array = [1,3,5,6,4,"Fart"];
	echo print_r($array);
	?>
	
	<br>

	<?php


	$array = [1,3,5,6,4,"Fart"];
	echo print_r($array);
	?>


</body>
</html>