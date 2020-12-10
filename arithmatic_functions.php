<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

	$integer = 4;
	$float = 3.14;


	echo floor($float);
	echo "<br/>";
	echo ceil($float);
	echo "<br/>";
	echo round($float);
	echo "<br/>";

	echo is_float($integer);
	echo "<br/>";
	echo is_float($float);
	echo "<br/>";

	echo is_int($integer);
	echo "<br/>";
	echo is_int($float);
	echo "<br/>";

	echo is_numeric($integer);
	echo "<br/>";
	echo is_numeric($float);
	echo "<br/>";
	
	
	?>
</body>
</html>