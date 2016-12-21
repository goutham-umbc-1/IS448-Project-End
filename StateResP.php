<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

   <head> 
	<title>Confirm State Residence</title>
	<link rel="stylesheet" type="text/css" href="app_format.css" />
 
  </head>

<!-- Gregory Y. Rigby
     -->

  <body> 
      <div class ="background">

	  
	<?php  

	$db = mysql_connect("studentdb-maria.gl.umbc.edu","goutham1","goutham1");

	if(!$db)
		exit("Error - could not connect to MySQL");
 
	$er = mysql_select_db("goutham1");
	  
	if(!$er)
		exit("Error - could not select database");
  
		
		$stateID =  htmlspecialchars($_POST["state_id"]);
		$licenNum =  htmlspecialchars($_POST["licen_num"]);
		$socNum =  htmlspecialchars($_POST["soc_num"]);
		  
		 
		if(preg_match("/^[A-Z]-\d{3}-\d{3}-\d{3}-\d{3}$/", $stateID)){
			echo "-Entered Valid MVA ID Card number- <br />"; 
		}
		elseif(empty($_POST["state_id"])) {
			echo "";
		}
		else{
			echo "* MVA ID Card number not provided or invalid <br />";
		}
		
		if(preg_match("/^[a-z]-\d{3}-\d{3}-\d{3}-\d{3}$/", $licenNum)){
			echo "-Entered Valid Driver's License number- <br />"; 
		}
		elseif(empty($_POST["licen_num"])) {
			echo "";
		}
		else{
			echo "* Driver's License number not provided or invalid <br />";
		}

		if(preg_match("/^\d\d\d\d$/", $socNum)){
			echo "-Entered Valid Social Security number- <br />"; 
		}
		elseif(empty($_POST["soc_num"])) {
			echo "";
		}
		else{
			echo "* Social Security number not provided or invalid <br />";
		}		
 
		
				
		$constructed_query = "INSERT INTO MDResidents_table (mvaID,drivLicen,SSN) VALUES ('$stateID','$licenNum','$socNum')";

		#print("<br>$constructed_query</br>");

		#Execute query

		$result = mysql_query($constructed_query);
		if(! $result){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		} 

	?>
</div>
	<h5> Return to <a href="Homepage.html">Home</a> or <a href="StateResidencePage.html">State Residence Confirmation</a> </h5>

	

	
	</body>
</html>
