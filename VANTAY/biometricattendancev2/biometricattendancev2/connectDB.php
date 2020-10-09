<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "id13697991_tyvannguyen2020";		//put your phpmyadmin username.(default is "root")
    $password = "S)G]VY*#MX%AT4sK";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id13697991_tyvannguyen";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>