<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php

		define("SOME_CONSTANT", 234);

		$num = "4.23";
		echo gettype($num);
		echo "<br/>";
		$num += 8;
		echo gettype($num);
		echo "<br/>";
		echo (integer) $num;
		echo "<br/>";

		echo gettype($num);
		settype($num, "integer");
		echo "<br/>";
		echo gettype($num);
		echo "<br/>";
		echo SOME_CONSTANT;
		echo "<br/>";
	?>

</body>
</html>