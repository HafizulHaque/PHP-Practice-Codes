<!DOCTYPE html>
<html>
<head>
	<title>PHP-First Page</title>
</head>
<body>
	<?php 
		$id = 2;
		$url = "secondpage.php";
		$company = "johnson & johnson";
		$title = "Go to Second Page";
	?>

	<a href="<?php echo rawurlencode($url); ?>?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $title; ?></a>
</body>
</html>