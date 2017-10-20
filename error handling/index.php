<?php
date_default_timezone_set('Europe/Vilnius');


function custom_error ($error_level, $error_message,
$error_file, $error_line, $error_context) {

echo date("Y-m-d H:i:s") . " " . "Ivyko klaida \n";
echo $error_file . "@" . $error_line . "\n";
echo $error_message . "\n";

$my_file = fopen("error.log", "a") or die ("unable to open file");

$write = date("Y-m-d H:i:s") . ",";
$write .= $error_file . "@" . $error_line . ",";
$write .= $error_message . "\n";

fwrite($my_file, $write);
fclose($my_file);

}


set_error_handler("custom_error");

echo $b;

// $skaicius = 0;

// if ($skaicius > 1) {
// 	echo "ok";
// } else {
// 	throw new Exception("OPAPAPAPAPAAAAA");
	
// }


// function checkNumber ($number) {
// 	if ($number > 1) {
// 		throw new Exception("OPAPAPAPAPAAAAA");
// 	} 
// 	return true;
// }


// try { 
// 	checkNumber(10); 
// }
// 	 catch (Exception $e) {
// 	 	echo "message: " .$e->getMessage();
// }

// function sum (int $a, int $b) : int {
// 	$result = $a + $b;
// 	return $result;
// }

// echo sum(7, 8);

phpinfo();