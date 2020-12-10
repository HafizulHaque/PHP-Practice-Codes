<?php 
	function redirect_to($address){
		header("Location: {$address}");
		exit;
	}

	if(isset($_GET['logged'])){
		redirect_to("index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-</title>
</head>
<body>
	you are not logged in
</body>
</html>