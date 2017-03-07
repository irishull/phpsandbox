<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second Page </title>
</head>
<body>

<!-- urlencode() function that takes reserved characters and converts them !$%& -->

	<pre>
		<?php
			// print_r($_GET); (shows query string params)


		?>
	</pre>

	<br>

	<?php

			$id = $_GET['id'];
			echo $id;

	?>


</body>
</html>