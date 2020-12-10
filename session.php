<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-sessions</title>
</head>
<body>
	<?php 
		$_SESSION["id"] = 53;
		$id = $_SESSION["id"];
		echo $id;
	?> 
</body>
</html>