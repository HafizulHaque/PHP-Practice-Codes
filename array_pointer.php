<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$arr = [1, 2, 4, 7, 3, 8];
		
		while($item = current($arr)){
			echo "{$item}<br/>";
			next($arr);
		}

		reset($arr);
		
		while($item = current($arr)){
			echo "{$item}<br/>";
			next($arr);
		}		
	

	?>
</body>
</html>