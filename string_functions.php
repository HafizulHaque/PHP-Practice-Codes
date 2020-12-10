<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		$first  = "The brown fox jumps";
		$second = " Jumps over the lazy dog.";

		$third = $first;
		$third .= $second;

		echo $third;
		echo "<br/>";
		echo strtolower($third);
		echo "<br/>";
		echo strtoupper($third);
		echo "<br/>";
		echo ucfirst($third);
		echo "<br/>";
		echo ucwords($third);
		echo "<br/>";
		echo ucFirst(strtolower($third));
		echo "<br/>";



		echo strlen($third);
		echo "<br/>";
		echo "A" . trim("  B C    D") . "E";
		echo "<br/>";
		echo $third[4];
		echo "<br/>";
		echo strstr($third, 'fox');
		echo "<br/>";
		echo str_replace('lazy', 'super-lazy', $third);
		echo "<br/>";

		echo str_repeat($third, 3);
		echo "<br/>";
		echo substr($third, 5, 10);
		echo "<br/>";
		echo strpos($third, 'brown');
		echo "<br/>";
		echo strchr($third, 'f');
		echo "<br/>";
	?>

	Exceptional : <?php echo 1 + '2'; ?> <br/>
	Exceptional : <?php echo '1' + 2; ?> <br/>
</body>
</html>