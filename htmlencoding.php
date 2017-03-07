<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML encoding </title>
</head>
<body>

	<?php
		$linktext = "<Click> & learn more";
	?>


	<a href="">
		
		<?php echo htmlspecialchars($linktext); ?>

	</a>

	<?php

		$text = "highASCIIcharacters"
		echo htmlentities($text);

	?>


</body>
</html>