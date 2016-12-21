<?php

if(isset($_POST["type"]))
	$type= $_POST["type"];
else
	$type="";

if ($type == "yes"){
	$response = "";
}
elseif ($type == "no"){
	$response = "Not Eligible";
}
else{
	$response = "error";
}

echo $response;

?>