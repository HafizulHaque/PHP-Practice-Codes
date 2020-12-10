<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	<?php 
		$arr = array(6, 'Cat', null, 3.14, array(4, 1, 'dog'));
		$arr[] = 'new item';
	?>

	<pre> <?php print_r($arr); ?> </pre><br/>

	<?php 
		$assoc = [
			"name"=> [
				"first_name"=>"Hafizul",
				"last_name"=>"Haque"
			],
			"age"=>22,
			"institution"=>"CUET"
		];

		$assoc["married"] ="yes";
	?>
	<pre> <?php print_r($assoc); ?> </pre><br/>
	<?php echo $assoc["institution"]; ?>

</body>
</html>