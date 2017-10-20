<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>HTML</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
<div class="errorai">
<h2>Ivykusios klaidos tavo kode</h2>
<?php
$my_file = fopen("error.log", "r+") or die ("unable to open file");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Time</th>
      <th scope="col">File and Line</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
<?php
for ($i=1; !feof($my_file); $i++) { 
	$errorai = explode(",", fgets($my_file));
	if ($errorai[0] != "") {
	echo "<tr><th scope='row'>" . $i . "</th>";
	echo "<td>" . $errorai[0] . "</td>";
	echo "<td>" . $errorai[1] . "</td>";
	echo "<td>" . $errorai[2] . "</td></tr>";
}
 } 

?>
</tbody>
</div>
			</div>
		</div>
	</div>
</body>
</html>