<?php
/* Author: Alvin Blesson
File: state.php
Description: PHP file that contains the funcionality for Ajax
Date Written: 12/20/16
*/

$home_state = strtoupper($_GET["state"]);

if ($home_state != "MD") {

	$response = "Warning! You are entering an address outside of Maryland. This may prevent you from voting in the next Election.";
}else{

	$response = "Maryland is the Best!";
}

echo $response;

?>