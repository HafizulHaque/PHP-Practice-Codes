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
		$id = 5;
		$menu_name = "Delete me";
		$position = 4;
		$visible = 0;

		$query  = "UPDATE subjects SET ";
		$query .= "visible={$visible}, ";
		$query .= "menu_name='{$menu_name}' ";
		$query .= "WHERE id>={$id}";

		$result = mysqli_query($connection, $query);

		if($result&&mysqli_affected_rows($connection)>0){
			echo "successfully updated";
 		}
		else{
			//unsuccessfull query
			echo "unsuccessfull query";
		}
	?>
	
</body>
</html>

<?php 
	// close database connection

	mysqli_close($connection);
?>