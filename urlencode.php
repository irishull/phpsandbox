<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>urlencode </title>
</head>
<body>

	<?php

		$page = "Bob Bob";
		$quote = "Hi its bob yo";
		$link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);

		echo $link1 . "<br>";

	?>



	<?php //$id = 2; ?>
	<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a><br>

</body>
</html>