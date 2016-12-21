<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<!--Author: Anderson Chan -->

<!-- 
	this php file will use sql to process and store a user's comments to our web server.
-->

<head>
    <title>FAQ Comment Submission</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript" src="faqinfo.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
</head>
 
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-red w3-card-2 w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction(navBarSmall)" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="~/homepage.html" class="w3-padding-large w3-hover-white">Home</a></li>
    <li class="w3-hide-small"><a href="~/user_profile.html" class="w3-padding-large w3-hover-white">Your profile</a></li>
    <li class="w3-hide-small"><a href="~/mapdistsys.html" class="w3-padding-large w3-hover-white">Find your polling location</a></li>
    <li class="w3-hide-small"><a href="~/StateResidencePage.html" class="w3-padding-large w3-hover-white">Confirm state residency</a></li>
    <li class="w3-hide-small"><a href="~/faqpage.html" class="w3-padding-large w3-hover-white">FAQ</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navBarSmall" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="~/homepage.html">Home</a></li>
      <li><a class="w3-padding-large" href="~/user_profile.html">Your profile</a></li>
      <li><a class="w3-padding-large" href="~/mapdistsys.html">Find your polling location</a></li>
      <li><a class="w3-padding-large" href="~/StateResidencePage.html">Confirm state residency</a></li>
	  <li><a class="w3-padding-large" href="~/faqpage.html">FAQ</a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo"></h1>
</header>

<div class="w3-container w3-red">
  
<?php
//connect to mysql server 
	$db = mysql_connect("studentdb-maria.gl.umbc.edu","achan2","achan2");
	if (!$db) {
		exit("Error - could not connect to MySQL");
	}
//select database
	$er = mysql_select_db("achan2");
	if(!$er) {
		exit("Error - could not select database");
	}
#get the parameter from the HTML form that this PHP program is connected to
#sanitize for HTML and SQL injection attacks
	$faqComment = mysql_real_escape_string(htmlspecialchars($_POST['comments']));
	$faqUserEmail = mysql_real_escape_string(htmlspecialchars($_POST['useremail']));
#check user email input is valid
	$isValidEmail;
	if (preg_match("/^\w*@\w*\.[A-Za-z]{2,}$/", $faqUserEmail)) {
		$isValidEmail = 1;
	} else {
		$isValidEmail = 0;
		print("<h1 class='w3-margin w3-large w3-center w3-text-white'>Entered email address is not valid! Please return and resubmit your comment.</h1><br/>");
	}
	$isValidText;
	if (!isset($faqComment) || trim($faqComment) == "") {
		print("<h1 class='w3-margin w3-large w3-center w3-text-white'>No text entered! Please return and resubmit your comment.</h1><br/>");
		$isValidText = 0;
	} else {
		$isValidText = 1;
	}
	
	if ($isValidEmail == 1 && $isValidText == 1) {
#insert query for user's comment
		$insertNewComment = "INSERT INTO FAQComment_T (dateAdded, userEmail, commentText) VALUES (sysdate(),'$faqUserEmail','$faqComment')";
		print("<h1 class='w3-margin w3-jumbo w3-center w3-text-white'>Thank you for submitting a comment!</h1>");
		print("<p class='w3-medium w3-center w3-text-white'>Please allow 1-3 business days for a response.</p>");
#execute query and check for errors
		$result1 = mysql_query($insertNewComment);
		if(!$result1) 
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
	}

?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

</body>
</html>	