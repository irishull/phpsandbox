<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>

<style>
	
	.evenNums {
		font-size: 20px;
		color: rgb(200,123,45);
		display: inline-block;
	}

	.oddNums {
		font-size: 15px;
		color: rgb(100,123,245);
		display: inline-block;
	}



</style>

</head>
<body>
<!-- 		while (expression)
		statement; -->

	<?php
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				echo "Fiver!!,";
			} else {
			echo $count . ", ";
			}
			$count++;
		}
	?>

	<?php
	echo "<br><h1>Count:</h1>";
	echo "Count: {$count}";
	?>

<br>
<h4>New Section</h4>
<br>

	<?php
		$count = 0;
		while ($count <= 10) {
			if ($count == 10) {
				echo $count;
			} else {
			echo $count . ", ";
			}
			$count++;
		}
	?>

<br>
<h4>New Section</h4>
<br>

	<?php
		$count = 0;
		while ($count <= 100) {
			if ($count % 2 == 0) {
				echo "<div class='evenNums'>{$count}</div>";
			} else {
			echo "<div class='oddNums'>{$count}</div>";
			}
			$count++;
		}
	?>




</body>
</html>