<?php

	session_start();
	
	//connect to database
	$db = mysqli_connect("localhost" , "root" , "" , "goalmakersdb")
		or die('Error connecting to MySQL server.');
	
	if(isset($_POST['subscribes'])){
		$mail = mysql_real_escape_string($_POST['email']);
		$sql = "INSERT INTO viewers(customer_email) VALUES('$mail')";
		mysqli_query($db , $sql);
	}


?>
