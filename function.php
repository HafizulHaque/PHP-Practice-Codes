<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 

		function sayHello($target1 ="unknownPerson1", $target2="unknownPerson2"){

			return ["hello {$target1}!", "hello {$target2}!"];
		}


		list($first, $second) = sayHello("Shanto", "Ishrak");

		echo $first;
		echo "<br/>";
		echo $second;
		echo "<br/>";

		list($first, $second) = sayHello();

		echo $first;
		echo "<br/>";
		echo $second;
	?>
</body>
</html>