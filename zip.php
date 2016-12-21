<?php 
 
	
	$zip = $_GET["zip"];

	
  
    if (preg_match("/^\d{5}$/", $zip)){
		echo "valid";
	}else{
		echo "invalid";
	}

	
	
	
	
?>

