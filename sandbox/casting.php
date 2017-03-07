<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array functions</title>
</head>
<body>

<p>Type Juggling</p>
<br>

	<?php
	//1st argument variable, 2nd argument type to cast to
	// settype($var, "integer");
	//method 2 below
	// (integer) $var
	$count = "2";


	?>
	
	Type: <?php echo gettype($count); ?> <br>
	<?php $count += 3; ?>
	Type <?php echo gettype($count); ?> <br>
<!-- 	string
	int, integer
	float
	array
	bool, boolean -->
	<?php echo $dogs = "I have " . $count . " dogs"; ?> <br>
	Dogs: <?php echo gettype($dogs); ?>

	<br>
	
	Type Casting <br>
	<?php
	$count2 = (string) $count;

	$test1 = 3;
	$test2 = 3;

	settype($test1, "string");
	(string) $test2;
	echo gettype($test1);
	echo gettype($test2);

	?>


</body>
</html>