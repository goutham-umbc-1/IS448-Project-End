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
	
#Ajax implementation of FAQ	
	if (isset($_POST["faq"])) {
		$faq = $_POST["faq"];
	} else {
		$faq = "Fatal database error!";
	}
	
	if ($faq == "faq1_a") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 1";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq1_b") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 2";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq1_c") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 3";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq2_a") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 4";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq2_b") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 5";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq2_c") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 6";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq2_d") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 7";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq3_a") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 8";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq3_b") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 9";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq3_c") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 10";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq4_a") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 11";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq4_b") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 12";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq5_a") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 13";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	} if ($faq == "faq5_b") {
		$faqQuery = "select faqText from FAQPage_T where faqID = 14";
		#Execute query
		$faqtext = mysql_query($faqQuery);
		$faqrow = mysql_fetch_array($faqtext);
		echo $faqrow['faqText'];
		#if result object is not returned, then print an error and exit the PHP program
		if(!$faqtext){
			print("Error - query could not be executed");
			$error = mysql_error();
			print "<p> . $error . </p>";
			exit;
		}
	}
?>