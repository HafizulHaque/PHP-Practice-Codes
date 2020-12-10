<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 
		echo "<ul>";

			$items = [1, 5, 2, 0, 3, 5];

			foreach($items as $item){
				echo "<li>" . "{$item} is in the list" . "</li>";
			}

		echo "</ul>";
		echo "<br/>";
		echo "<ol>";

			$student = [
				"name" => "Hafizul Haque",
				"age" => 24,
				"institution" => "CUET"
			];

			foreach($student as $key=>$value){
				echo "<li>" . "{$key}" . " : " . "{$value}" . "</li>";
			}
		echo "</ol>";
	?>
</body>
</html>