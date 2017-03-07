<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logical</title>
</head>
<body>



	<?php

	$a = 4;
	$b = 3;

	if($a > $b) {
		echo "a is larger than b";
	} elseif ($a < $b) {
		echo "a is smaller than b";
	} else {
		echo "a is equal to b";
	}

	$new_user = true;

	if($new_user) {
		echo "<br><h1>Welcome User</h1>";
	}


	?>
	

	<br>

	<h1>if not set operation works if 200 is displayed below:</h1>

	<?php

		if (!isset($e)) {
			$e = 200;
		}
		echo $e;

		$quantity = "";

		if (empty($quantity) && !is_numeric($quantity)) {
			echo "<br> You must enter a quantity";
		}

	?>

</body>
</html>