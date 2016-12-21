<?php 
	 $username = null;
	 $password = null;
     $db = mysql_connect("studentdb-maria.gl.umbc.edu", "goutham1", "goutham1");
	    if(!$db){
		  exit("Error could not connect to mySQL");
		}
	    $er = mysql_select_db("goutham1");
	    if(!$er){
		  exit("Error could not select database");
		} 
	if (isset($_POST["username1"])) {
		$username = mysql_real_escape_string(htmlspecialchars($_POST["username1"]));
	}
	if (isset($_POST["password1"])) {
		$password = mysql_real_escape_string(htmlspecialchars($_POST["password1"]));
	}
    $query = "SELECT * FROM userTable WHERE username = '$username' AND password = '$password' ";
    $result = mysql_query($query);
    $numrows = mysql_num_rows($result);
    if($numrows >= 1) {
		$response = "Success";
        header('Location: Homepage.html');
   } else {
		$response = "Username or password is not in the system";
   }
  echo $response;
?>