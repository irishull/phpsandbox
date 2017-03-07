<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions: Arguments</title>
</head>
<body>

<!-- 	function name($arg1, $arg2) {
	statement;
	} -->

	<?php

		function say_hello_to($word) {
			echo "Hello {$word}!<br>";
		}

		$name = "Jeff";
		say_hello_to($name);
	?>
	<br>

	<?php

		function better_hello($greeting, $target, $punct) {
			echo $greeting . " " . $target . $punct . "<br>";
		}

		better_hello("Yo", "Bitch", "!!!!");

	?>


</body>
</html>