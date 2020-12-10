<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$numbers = [12, 4, 23, 56, 233];
		$strings = ['cats', 'dogs', 'cow','crow'];

		sort($numbers);
		rsort($strings);

		print_r($numbers);
		echo "<br/>";
		print_r($strings);
		echo "<br/>";

		echo implode(" * ", $numbers);
		echo "<br/>";
		$persed_str = "3, 4, 9, 1, 4, 5";
		print_r(explode(",",$persed_str));
		echo "<br/>";
		echo "is 4 in the array :" . in_array(4, $numbers);
		echo "<br/>";
		echo "is 0 in the array :" . in_array(0, $numbers);
	?>
</body>
</html>