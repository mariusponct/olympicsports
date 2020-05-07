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
	echo '<div class="search_bar">'.
		 	'<input type="text" id="sportsInput" onkeyup="searchSports()" placeholder="Search sports..">'.
		 '</div>';

	echo '<table id="sportsTable">';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>'.
    			 '<td> <a href="sports.php?name='. str_replace(' ', '_', $row["name"]). '">'. $row["name"]. '</a> </td>'.
			 '</tr>';
	}
	echo '</table>';
}
