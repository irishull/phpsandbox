<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Pointer</title>
</head>
<body>

<!-- php has a pointer that points to the current item in the array
 thats the first item in the array
 -->

	<?php

		$ages = array(11,12,15,22,55,66);

		echo print_r($ages);

		echo "<br>" . "1:" . current($ages) . "<br>";

		next($ages);

		echo "2: " . current($ages) . "<br>";

		prev($ages);

		echo "3: " . current($ages) . "<br>";

		next($ages);
		next($ages);
		next($ages);

		echo "4: " . current($ages) . "<br>";

		reset($ages);
		echo "5: " . current($ages) . "<br>";

		end($ages);
		echo "6: " . current($ages) . "<br>";
	?>
	<br>

	<?php

	reset($ages);

	// while loop that moves the array pointer similar to foreach
	// in loop you're assigning a var $age to the array pointer,
	// it runs until the end of the array, in which case the value
	// is null or false and it breaks out of the loop!
	// Works on PHP arrays not database arrays...
		while($age = current($ages)) {
			echo $age . ", ";
			next($ages);
		}


	?>


</body>
</html>