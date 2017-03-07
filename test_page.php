<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page </title>
</head>
<body>

	<?php $link_name = "Second Page"; ?>

<!-- 	can add query string like ?id=1 to url end .php?id=1 -->

	<?php $id = 2; ?>
	<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a><br>

<a href=""></a>
	<?php
	$id = 1;
	for($count = 1; $count <= 20; $count++){
		echo "<a href='second_page.php?id={$id}'>" . "Page {$count}" . "</a>" . "&nbsp";
		$id += 1; 

	}

	?>

</body>
</html>