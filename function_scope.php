<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$var = 10;

		function foo(){
			global $var;
			$var = 20;
		}
	
		foo();
		echo $var;

	?>
</body>
</html>