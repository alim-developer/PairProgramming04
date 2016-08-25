<?php
	
	$host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'db_oxu'; 

	$db_con = mysqli_connect($host, $db_username, $db_password, $db_name);

	if(!$db_con){
		echo "Error";
	}

		


?>