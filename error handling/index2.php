<?php

function custom_error ($error_level, $error_message,
$error_file, $error_line, $error_context) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "errorai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$failas_ir_eilute = $error_file . "@" . $error_line;
$data_ir_laikas = date('Y-m-d H:i:s');

$sql = "INSERT INTO error_info (time, file, error)
VALUES ('$data_ir_laikas', '$failas_ir_eilute', '$error_message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


set_error_handler("custom_error");

echo $b;



?>