<?php 
	require_once("header_functions.php");
	require_once("validation_functions.php");
	$errors = [];

	$username = "";
	$email = "";

	if(isset($_POST["submit"])){
		//POST request
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		if(!has_presence($username)){
			$errors["username_presence"] = "Fill in your user name"; 
		}
		if(!has_presence($email)){
			$errors["email_presence"] = "Fill in your Email";
		}
		else if(!valid_email($email)){
			$errors["invalid_email"] = "Enter a valid email";
		}
		if(!has_presence($password)){
			$errors["password_presence"] = "Type your password";
		}
		else if(!has_min_length($password, 4)){
			$errors["short_pass"] = "Password too short";
		}
		else if(!has_max_length($password, 8)){
			$errors["long_pass"] = "Password too long";
		}

		if(empty($errors)){
			// successfull log in
			redirect_to("success.php");
		}
		else{
			//unsuccessfull log in
		}
	}
	else{
		//GET request
	}

	require("header.php");
	echo form_errors($errors);
	include("form.php");
	require("footer.php");
?>

