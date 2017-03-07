<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions: Scope</title>
</head>
<body>

	<?php

		$bar = "outside"; //global scope

		function foo() {
			global $bar;  //brings in bar from global scope
			$bar = "inside"; //local
		}

		echo "1: " . $bar . "<br>";
		foo();
		echo "2: " . $bar . "<br>";
	?>
	<br>

	<?php

	?>


</body>
</html>