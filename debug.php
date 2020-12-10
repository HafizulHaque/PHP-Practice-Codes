<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$number = 10;
		$string = "error?";

		function foo($arg){
			echo "called with argument {$arg}";
			var_dump(debug_backtrace());
		}

		foo("error in function???");

		var_dump($number);
		var_dump($string);

	?>
	<pre>
	<?php print_r(get_defined_vars()); ?>
	</pre>
</body>
</html>