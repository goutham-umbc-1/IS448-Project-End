<?php 
    $username = isset($_POST['username']);
    $password = isset($_POST['password']);
    $confirmPassword = isset($_POST['confirmPassword']);
    if($_POST['password'] !== $_POST['confirmPassword']){
        echo "Passwords do not match";
    } else {
        $db = mysql_connect("studentdb-maria.gl.umbc.edu", "goutham1", "goutham1");
	    if(!$db){
		  exit("Error could not connect to mySQL");
		}
	    $er = mysql_select_db("goutham1");
	    if(!$er){
		  exit("Error could not select database");
		} 
        $numUsers = mysql_num_rows(mysql_query("SELECT * FROM userTable"));
		$voterID = $numUsers + 1;
		$insertquery = "INSERT INTO userTable(voter_ID, username, password)
							VALUES('$voterID','$username', '$password')";
	    $inserted = mysql_query($insertquery);
        header('Location: Homepage.html');
}
?>
    