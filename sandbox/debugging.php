<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Debugging and Troubleshooting</title>
</head>
<body>

	<?php

	$variable = "Hello";
	$array = array(1,2,4,5,6);

	echo $variable . "<br>"; //variable value
	print_r($array) ; // print readable array

	echo "<br>" . gettype($variable); // variable type
	// backtrace shows steps leading up to where you were before, good for
	// diagnosiing problems step by step.

	var_dump($variable); //variable type and value

	get_defined_vars(); // array of defined variables

	debug_backtrace(); //show backtrace

	?>
	<br>
	<h1>next section</h1>
	<?php

	$number = 99;
	$string = "Bug?";
	$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

	var_dump($number);
	var_dump($string);
	var_dump($array);

	?>
	
	<pre> <!-- print_r looks best within pre tags -->
		<?php

			//print_r(get_defined_vars());

		?>
	</pre>


	<?php

		var_dump(debug_backtrace());
		//see xdebug for debugging plugin, also
		//dbg and firephp which works with firefox firebug plugin
	?>

</body>
</html>