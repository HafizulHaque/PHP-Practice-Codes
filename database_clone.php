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

<?php 
	//step-02: query database

	$query  = "SELECT * ";
	$query .= "FROM pages ";
	// $query .= "WHERE subject_id<3 ";
	$query .= "ORDER BY position DESC";

	$result = mysqli_query($connection, $query);

	if(!$result){
		die("database query failed");
	}
	else{
		//successfull query
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-mysqli connection</title>
</head>
<body>
	<?php
		// step-03: Use returned data

		echo "<ul>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<li>{$row["menu_name"]}</li>";
		}
		echo "</li>";
	?>
	<?php 
		// step-04: Release returned data

		mysqli_free_result($result);
	?>
</body>
</html>

<?php 
	// close database connection

	mysqli_close($connection);
?>