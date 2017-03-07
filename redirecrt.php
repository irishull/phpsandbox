<?php
// this is how you redirect to a new page
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1") {
		redirect_to("basic.html");
	} else {
		redirect_to("http://www.bing.com");
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Break </title>
</head>
<body>

	<?php

	?>
	<br>

	<?php

	?>


</body>
</html>