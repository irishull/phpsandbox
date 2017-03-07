<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Break </title>
</head>
<body>

	<?php
	$failed = "Validation failed.<br>";

	// * presence (is form field blank?)
	$value = "";
	if (!isset($value) || empty($value)) {
		echo $failed;
	}
	// * string length
	// minimum length
	$value = "";
	$min = 3;
	if (strlen($value) < $min) {
		echo $failed;
	}
	// max length
	$max = 6;
	if (strlen($value) > $max) {
		echo $failed;
	}

	// * type
	$value = "";
	if (!is_string($value)) {
		echo $failed;
	}

	// * inclusion in a set
	$value = 1;
	$set = array("1","2","4");
		if (!in_array($value, $set)) {
		echo $failed;
	}

	// * uniqueness


	// * format
	// use a regex on a string
	// preg_match($regex, $subject)
	if (preg_match("/PHPx/", "PHP is fun")) {
		echo "Match found";
	} else {
		echo "Match not found.";
	}


	?>
	<br>

</body>
</html>