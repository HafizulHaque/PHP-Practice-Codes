<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$x = 10;
		$y = 20;

		echo 'output is : ' . ($x+$y);
	
		$greeting = 'hello';
		$target = 'world';
	?>
	<br/>
	<?php

		echo $greeting . ' ' . $target;
		echo '<br/>';  
		echo "{$greeting} {$target}";
	?>
</body>
</html>