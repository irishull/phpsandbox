<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page </title>
</head>
<body>

	<?php $link_name = "Second Page"; ?>
	<?php $id = 5; ?>
	<?php $company = "Jeff & Jeff"; ?>

<!-- 	can add query string like ?id=1 to url end .php?id=1 -->
<!-- urlencoding for get requests only 
rawurlencode() makes it %20
rawurlencode the path (part before the '?'')
use urlencode for the query string
rawurlencode is more compatible generally, its newer

-->
	<?php $id = 2; ?>
	<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a><br>

</body>
</html>