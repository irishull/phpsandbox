<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>

	<?php
	$var2 = "String";
	$varvar = $var2 . $var2;
	echo $varvar;

	?>
	<br>

	<?php
	//can do this interpolation with double quotes
	echo "{$varvar} hahaha {$varvar} <br> {$varvar}";

	?>


</body>
</html>