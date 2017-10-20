<?php

function prideti_is_failo () {

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "errorai";


		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

	$my_file = fopen("error.log", "r+") or die ("unable to open file");

	while (!feof($my_file)) { 
		$errorai = explode(",", fgets($my_file));

		$errorai1 = $errorai[0];
		$errorai2 = $errorai[1];
		$errorai3 = $errorai[2];

		$sql = "INSERT INTO error_info (time, file, error)
		VALUES ('$errorai1', '$errorai2', '$errorai3')";

		if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}

$conn->close();

}


prideti_is_failo();


