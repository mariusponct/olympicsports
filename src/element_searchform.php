<?php
require '../conf/settings.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM sports ORDER BY name";
$result = $conn->query($sql);

$conn->close();

if ($result->num_rows > 0 ) {
	echo '<div class="row text-center mt-5 h3">'.
			'<div class="col">'.
		 	'<input type="text" id="sportsInput" onkeyup="searchSports()" placeholder="Search for sports...">'.
		 	'</div>'.
		 '</div>';

	echo '<div class="row justify-content-center h-25" style="overflow-y: auto">'.
		 	'<div class="col-auto">'.
	     		'<table id="sportsTable">';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>'.
    			 '<td class="h5"> <a href="sports.php?name='. str_replace(' ', '_', $row["name"]). '">'. ucfirst($row["name"]). '</a> </td>'.
			 '</tr>';
	}
	echo '</table>';
			'</div>'.
		 '</div>';
}
