<?php 
	//step-01: connects to database

	$host = "localhost";
	$user = "widget_cms";
	$pass = "shanto97";
	$db_name = "widget_corp";

	$connection = mysqli_connect($host, $user, $pass, $db_name);

	if(mysqli_connect_errno()){
		die("some error occured".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	else{
		// database connected.
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-mysqli connection</title>
</head>
<body>
	<?php 
		//step-02: query database

		$menu_name = "Today's widget Trivia 2";
		$position = 4;
		$visible = 1;
		$menu_name = mysqli_real_escape_string($connection, $menu_name);

		$query  = "INSERT INTO subjects (menu_name, position, visible) ";
		$query .= "values('{$menu_name}', {$position}, {$visible})";

		$result = mysqli_query($connection, $query);

		if($result&&mysqli_affected_rows($connection)==1){
			echo "successfull query";
		}
		else{
			//unsuccessfull query
			die("database query failed");
		}
	?>
	
</body>
</html>

<?php 
	// close database connection

	mysqli_close($connection);
?>