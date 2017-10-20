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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "errorai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, time, file, error FROM error_info";
$result = $conn->query($sql);

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
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><th scope='row'>" . $row["id"] . "</th>";
	echo "<td>" . $row["time"] . "</td>";
	echo "<td>" . $row["file"] . "</td>";
	echo "<td>" . $row["error"] . "</td></tr>";   
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</tbody>
</div>
			</div>
		</div>
	</div>
</body>
</html>