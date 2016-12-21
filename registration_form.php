<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0058)file:///Users/Connor/Documents/is448/registration_app.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Voter Registration Application </title>
	
	<link rel="stylesheet" type="text/css" href="app_format.css">
</head>
<body class="background">

<?php

	error_reporting(0);
	$db = mysql_connect("studentdb-maria.gl.umbc.edu","goutham1","goutham1");

		if(!$db)
			exit("Error - could not connect to MySQL");

		$er = mysql_select_db("goutham1");
		if(!$er)
			exit("Error - could not select database");

	$createTable = "CREATE TABLE IF NOT EXISTS `userTable` (
	  `voter_ID` int(25) NOT NULL AUTO_INCREMENT,
	  `first_name` text NOT NULL,
	  `m_initial` varchar(15) NOT NULL,
	  `last_name` text NOT NULL,
	  `DoB` date NOT NULL,
	  `sex` text NOT NULL,
	  `race` varchar(25) NOT NULL,
	  `phone` varchar(15) NOT NULL,
	  `email` varchar(25) NOT NULL,
	  `address` varchar(25) NOT NULL,
	  `city` text NOT NULL,
	  `state` text NOT NULL,
	  `zip` int(5) NOT NULL,
	  `county` varchar(25) NOT NULL,
	  `affiliation` text NOT NULL,
	  PRIMARY KEY (`voter_ID`)
	) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2";

mysql_query($createTable);

	$uname = mysql_real_escape_string($_POST["uname"]);
	$pass = mysql_real_escape_string($_POST["pass"]);
	$firstName = mysql_real_escape_string($_POST["fname"]);
	$midInitial = mysql_real_escape_string($_POST["middle"]);
	$lastName = mysql_real_escape_string($_POST["lname"]);
	$DOB = mysql_real_escape_string($_POST["DOB"]);
	$sex = mysql_real_escape_string($_POST["sex"]);
	$race = mysql_real_escape_string($_POST["race"]);
	$phone = mysql_real_escape_string($_POST["phone"]);
	$email = mysql_real_escape_string($_POST["email"]);
	$addr = mysql_real_escape_string($_POST["addr"]);
	$city = mysql_real_escape_string($_POST["city"]);
	$state = $_POST["state"];
	$zip = mysql_real_escape_string($_POST["zip"]);
	$county = mysql_real_escape_string($_POST["county"]);
	$affiliation = $_POST["aff"];
	$citizen = $_POST["citizen"];
	$oldEnough = $_POST["eighteen"];

	if(($citizen == 'yes') && ($oldEnough == 'yes')){

		$insertQuery = "INSERT INTO userTable(username,password,first_name,m_initial,last_name,DoB,race,phone,email,address,city,state,zip,county,affiliation)
		VALUES('$uname','$pass','$firstName','$midInitial','$lastName','$DOB','$race','$phone','$email','$addr','$city','$state','$zip','$county','$affiliation')";

		$result = mysql_query($insertQuery);

		if(! $result){
		print("Error - query could not be executed");
		$error = mysql_error();
		print "<p> . $error . </p>";
		exit;
	}
	?>
	<p class="center"> 
		Thank you for registering!
		<br/>
		<a href="Homepage.html">Home</a>
	</p>
	<?php
	}

	else{
	?>
	<p class="center">
		Sorry you are unable to register at this time. <br/><br/>
		Remember you must be at least 18 years of age and a U.S. citizen. <br/><br/>
		Also, make sure you have entered your date of birth and phone number in the correct format:<br/><br/>
		Phone: ###-###-#### <br/> Date of birth: MM/DD/YYYY <br/><br/>

		<a href="registration_form.html">Go Back</a> | <a href="Homepage.html">Home</a>
	</p>
	<?php
	}
	
?>
</body>
</html>