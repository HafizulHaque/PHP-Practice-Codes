<?php 
		$name = "test";
		$value = 255;
		$expireDate = time() + (60*60*24);
		setcookie($name, $value, $expireDate)
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<pre>
		<?php print_r($_COOKIE); ?> 
	</pre>
</body>
</html>