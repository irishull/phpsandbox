<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach Loops</title>
</head>
<body>

<!-- 	foreach ($array as $value) {
		statement; 
		}
		creating value to exist inside the loop

	what if you wanted to print out last 15 orders

	associative arrays (keys and values) work with foreach loops!

	foreach ($array as $key => $value) {
		statement;
	}

	-->

	<?php

	$person = array(
		"first_name" => "Emily",
		"last_name" => "H",
		"address" => "123 Fake Street",
		"city" => "Kville",
		"state" => "NY",
		"zip_code" => "10101"
		);

	foreach($person as $attribute => $data) {
		$attr_nice = ucwords(str_replace("_", " ", $attribute));
		echo "{$attr_nice}: {$data}<br>";
	}

	?>
	<br>

	<?php
		$prices = array("Xbox One" => 250,
						"Mass Effect 4" => 60,
						"Endless Fun" => null);

		foreach($prices as $item => $price) {
			echo "{$item}: ";
			if (is_int($price)) {
				echo "$" . $price;
			} else {
				echo "priceless";
			}
				echo "<br>";
			}

	?>


</body>
</html>