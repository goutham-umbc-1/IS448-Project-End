<?php

  session_start();

  if(!isset($_SESSION['voterID'])){
    $flag = 1;
    $_SESSION['voterID'] = 3;
    $voter = $_SESSION['voterID'];
     
  }
  else{
    $flag = 0;
    $voter = $_SESSION['voterID'];
  }

?>
<!-- Change User Profile Page 

Written by: Alvin Blesson
Date: 11-20-16

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> Change User Profile</title>
	<link rel="stylesheet" type="text/css" href="app_format.css" />
</head>

  <!-- Start Page Content -->
  <body>
	<p class ="heading"> <span class = "large" > Change Voter Profile  </span>
	<br />
	<a href="Homepage.html"> Home </a> |
	<a href="faqpage.html"> Need Help? </a> |
	<a href="user_profile.html"> Make Another Change </a>
	</p>
	<p class = "center">

<?php

	#connect to database
	$db = mysql_connect("studentdb-maria.gl.umbc.edu","goutham1","goutham1");

	if(!$db)
		exit("Error - could not connect to MySQL");

	#select database 
	$er = mysql_select_db("goutham1");
	if(!$er)
		exit("Error - could not select USER database");

	#Retrieve form information 
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$new_birth = mysql_real_escape_string($_POST['birthday']);
	$new_address = mysql_real_escape_string($_POST['address']);
	$new_city = mysql_real_escape_string($_POST['city']);
	$new_state = mysql_real_escape_string($_POST['state']);
	$new_zip = mysql_real_escape_string($_POST['zip']);
	$new_county = mysql_real_escape_string($_POST['county']);
	$new_phone = mysql_real_escape_string($_POST['phone']);
	$new_email = mysql_real_escape_string($_POST['email']);
	$new_party = mysql_real_escape_string($_POST['party']);


	#Create the query
	$constructed_query = "UPDATE userTable SET address='$new_address' WHERE voter_id='$voter'";

	$constructed_query2 = "UPDATE userTable SET first_name='$fname' WHERE voter_id='$voter'";

	$constructed_query3 = "UPDATE userTable SET last_name='$lname' WHERE voter_id='$voter'";

	$constructed_query4 = "UPDATE userTable SET DoB='$new_birth' WHERE voter_id='$voter'";

	$constructed_query5 = "UPDATE userTable SET affiliation='$new_party' WHERE voter_id='$voter'";

	$constructed_query6 = "UPDATE userTable SET city='$new_city' WHERE voter_id='$voter'";

	$constructed_query7 = "UPDATE userTable SET state='$new_state' WHERE voter_id='$voter'";

	$constructed_query8 = "UPDATE userTable SET zip='$new_zip' WHERE voter_id='$voter'";
	
	$constructed_query9 = "UPDATE userTable SET phone='$new_phone' WHERE voter_id='$voter'";

	$constructed_query10 = "UPDATE userTable SET email='$new_email' WHERE voter_id='$voter'";

	$constructed_query11 = "UPDATE userTable SET county='$new_county' WHERE voter_id='$voter'";


	#print("<b>Query: $constructed_query<br /></b>");
	#Execute query
	$result = mysql_query($constructed_query);
	$result2 = mysql_query($constructed_query2);
	$result3 = mysql_query($constructed_query3);
	$result4 = mysql_query($constructed_query4);
	$result5 = mysql_query($constructed_query5);
	$result6 = mysql_query($constructed_query6);
	$result7 = mysql_query($constructed_query7);
	$result8 = mysql_query($constructed_query8);
	$result9 = mysql_query($constructed_query9);
	$result10 = mysql_query($constructed_query10);
	$result11 = mysql_query($constructed_query11);

	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
		exit;
	}elseif (!$result2) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result3) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result4) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result5) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result6) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result7) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result8) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result9) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result10) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}elseif (!$result11) {
		print("<br /> Error - query could not be executed");
		$error = mysql_error();
		print "<p>$error</p>";
	}
	else{
		print("<br /> Success your profile has been updated! Below is a Summary of your Profile. <br />");
	}

	$select_query = "SELECT * FROM userTable WHERE voter_id='$voter'";
	$select_result = mysql_query($select_query);

	$num_fields = mysql_num_fields($select_result);
?>
	<table align="center" border ="1">

<?php
	$profile_array = mysql_fetch_array($select_result);
	print("<tr>");
	print("<td> Voter ID  </td>
		<td>$profile_array[voter_ID] </td>");
	print("</tr>");

	print("<tr>");
	print("<td> Full Name  </td>
		<td>$profile_array[first_name] $profile_array[last_name]</td>");
	print("</tr>");

	print("<tr>");
	print("<td> Address  </td>
		<td>$profile_array[address], $profile_array[city], $profile_array[state] $profile_array[zip]</td>");
	print("</tr>");

	print("<tr>");
	print("<td> Affiliation  </td>
		<td>$profile_array[affiliation] </td>");
	print("</tr>");

	print("<tr>");
	print("<td> Date of Birth  </td>
		<td>$profile_array[DoB] </td>");
	print("</tr>");

	print("<tr>");
	print("<td> Email  </td>
		<td>$profile_array[email] </td>");
	print("</tr>");

	print("<tr>");
	print("<td> Phone  </td>
		<td>$profile_array[phone] </td>");
	print("</tr>");

	print("<tr>");
	print("<td> County of Residence  </td>
		<td>$profile_array[county] </td>");
	print("</tr>");


?>

</table>
</body>
</html>
 
