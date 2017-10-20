<?php
$my_file = fopen("people.csv", "r+") or die ("unable to open file");

/*$contents = fread($my_file, filesize("test.txt"));*/
/*$people = [];
while (!feof($my_file)) {
	$people[] = explode(",", fgets($my_file));
}





print_r($people);*/


$update = [
	["vardas" => "Jonas", "veikla" => "kardu gaminimas"],
	["vardas" => "Petras", "veikla" => "updeitu meistras"],
	["vardas" => "Zigmas", "veikla" => "zuvyciu augintojas"],
];

foreach ($update as $update_value) {
	$write = $update_value["vardas"] . ", " . $update_value["veikla"] . "\n";
	fwrite($my_file, $write);
}

fclose($my_file);




/*$words = explode(" ", $contents);

echo $words[0];*/