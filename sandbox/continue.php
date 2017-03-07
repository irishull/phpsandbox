<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Continue</title>
</head>
<body>
<!-- Continue inside loops will read file and under condition skip to the next one
when continue is reached. -->

	<?php

		for($count = 0; $count <= 10; $count++) {
			if ($count % 2 == 0) {
				//skips over even numbers
				continue;
			}
			echo $count . ", ";

		}

	?>
	<br>

	<?php
	// loop inside a loop with continue
	// you can pass argument to continue, by default it's 1 but you can skip
	// more than 1 step
		for ($i=0; $i<=5; $i++) {
			if ($i % 2 == 0) { continue(1); }
			for ($k=0; $k<=5; $k++) {
				if ($k == 3) { continue(2); }
				echo $i . "-" . $k . "<br>";
			}
		}

	?>


</body>
</html>