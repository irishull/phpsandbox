<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions: Default Argument Values</title>
</head>
<body>

	<?php

		function paint($room="thing", $color="pink") {
			return "The color of the {$room} is {$color}.<br>";
		}

		echo paint();
		echo paint("shit", "brown");
		echo paint("Yellow");
	?>
	<br>

	<?php

	?>


</body>
</html>