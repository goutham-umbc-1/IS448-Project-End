<?php 
    $zip = mysql_real_escape_string($_POST['zip']); 
	$county = $_POST["dataType"];
	
    //$password = mysql_real_escape_string($_POST['password']);
    //$confirmPassword = $_POST['confirmPassword'];
    //if($_POST['password'] !== $_POST['confirmPassword']){
     //   echo "Passwords do not match";
    //} else {
    $db = mysql_connect("studentdb-maria.gl.umbc.edu", "goutham1", "goutham1");
	    if(!$db){
		  exit("Error could not connect to mySQL");
		}
	$er = mysql_select_db("earlyvotingsites");
	    if(!$er){
		  exit("Error could not select database");
		} 
		
	

	$query = "SELECT * FROM earlyvotingsites WHERE zip = '$zip'";
	$result = mysql_query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				echo "<br> Your closest site is ". $row["place"]." located in ". $row["county"].". The address is ". $row["address"]. "<br>"
			}else{
				echo "Database is limited. Choose a County for a list of sites";
			}
		$db->close();
		}
	
    //$numUsers = mysql_num_rows(mysql_query("SELECT * FROM "));
	
	switch ($county){
		case "Allegany County":
			
			break;
		case "Anne Arundal County":
	
			break;
		case "Baltimore City":
	
			break;
		case "Baltimore County":
	
			break;
		case "Calvert County":
	
			break;
		case "Caroline County":
	
			break;
		case "Carroll County":
	
			break;
		case "Cecil County":
	
			break;
		case "Charles County":
	
			break;
		case "Dorchester County":
	
			break;
		case "Frederick County":
	
			break;
		case "Garrett County":
	
			break;
		case "Hartford County":
	
			break;
		case "Howard County":
	
			break;
		case "Montgomery County":
	
			break;
		case "Prince Georges County":
	
			break;
		case "Queen Annes County":
	
			break;
		case "Saint Marys County":
	
			break;
		case "Somerset County":
	
			break;
		case "Talbot County":
	
			break;
		case "Washington County":
	
			break;
		case "Wicomico County":
	
			break;
		case "Worcester County":
	
			break;
		
		
	    //$userID = $numUsers + 1;
	    //mysql_query("INSERT INTO users(userID, username, password)
							//VALUES('$userID', '$username', '$password')");
        header('Location: Homepage.html');
}
?>
