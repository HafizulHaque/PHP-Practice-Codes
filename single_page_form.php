<?php 

	function redirect_to($address){
		header("Location: {$address}");
		exit;
	}

	$username = "";
	$message = "Please Log in";

	if(isset($_POST["submit"])){
		//POST request
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username=="hafizul"&&$password=="secret"){
			//successful log in
			redirect_to("index.php");
		}
		else{
			//unsuccessful log in
			$message = "Submit form correctly";
		}
	}
	else{
		//GET request
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP-Form</title>
</head>
<body>
	<h1>
		<?php echo $message; ?>
	</h1>
	<form action="single_page_form.php" method="post">
		User Name : <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br/><br/>
		Password  : <input type="password" name="password"><br/><br/>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>