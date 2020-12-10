<?php 
	
	function has_presence($value){
		return isset($value) && $value !=="";
	}

	function has_min_length($value, $len){
		return strlen(trim($value))>=$len;
	}

	function has_max_length($value, $len){
		return strlen(trim($value))<=$len;
	}

	function valid_email($value){
		return preg_match("/@/", $value);
	}


	function form_errors($errors = array()){
		$output = "";

		if(!empty($errors)){
			$output = "<div class = \"error\">";
			$output .= "Please fix the following errors: <br/>";
			$output .= "<ul>";
			foreach($errors as $key => $value){
				$output .= "<li> {$value} </li>";
			}
			$output .= "</ul>";
			$output .= "<br/><br/></div>";
		}
		return $output;
	}

?>