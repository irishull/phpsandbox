<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>

	<?php

	$first = "poop poop poop";
	$second = "pee";

	$third = $first;
	$third .= $second;
	echo $third;

	/*
	strtolower
	strtoupper
	ucfirst (uppercase first)
	ucwords (uppercase words)

	strlen (length)
	trim (trim removes trailing white space like B    C   D to BCD)
	strstr(variable, "searchterm")  find
	str_replace ("original", "replacement", $variable) replace

	str_repeat($variable, #oftimes(int)) Repeat
	substr($var, startnum, endnum) - make substring
	strpos($var, "string") - find position
	strchr($var, "char") find character

	*/
	?>

	<br>

	<?php echo strtoupper($first); ?>


</body>
</html>