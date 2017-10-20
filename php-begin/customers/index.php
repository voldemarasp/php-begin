<?php
$my_file = fopen("old.csv", "r") or die ("unable to open file");
$my_file2 = fopen("new.csv", "w") or die ("unable to open file");
for ($id = 1; !feof($my_file); $id++) {
	$customers = fgets($my_file);
	$write = $id . "." . $customers[0] . ", " . rtrim($customers[1],"\n") . ", " . $customers[0] . "@php.lt \n";
	fwrite($my_file2, $write);
	echo $write;
}
fclose($my_file);
fclose($my_file2);