<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Processing</title>
</head>
<body>
	<pre>
	<?php
		print_r($_POST);
	?>
	</pre>

	<br>

	<?php

	// set default values

		// if (isset($_POST["username"])) {
		// 	$username = $_POST["username"];
		// } else {
		// 	$username = "poop";
		// }
		// if (isset($_POST["password"])) {
		// 	$password = $_POST["password"];
		// } else {
		// 	$password = "afafaf";
		// }



		// $username = $_POST["username"];
		// $password = $_POST["password"];

	// another way to do it is with ternary operator,
	// boolean_test ? value_if_true : value_if_false

	// $username = isset($_POST['username']) ? $_POST['username'] : "";
	// $password = isset($_POST['password']) ? $_POST['password'] : "";

	// detect form submission
	if (isset($_POST['submit'])) {
		echo "form submitted";
	} else {
		$username = "bob";
		$password = "fuckyou";
	}

		echo "{$username}: haha your password is {$password}"
	?>


</body>
</html>