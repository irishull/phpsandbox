<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For Loops</title>
</head>
<body>

<!-- 	for (initial; test; each) {
		statement; 
		}

	-->

	<?php
		$count = 0;


		for($count = 0; $count <= 10; $count++){
			echo $count * 2 . " then ";
		}

	?>
	<br>

	<?php

	for ($count = 20; $count > 0; $count--) {
		if ($count % 2 == 0){
			echo "{$count} is even.<br>";
		} else {
			echo "{$count} is odd.<br>";
		}
	}

	?>


</body>
</html>