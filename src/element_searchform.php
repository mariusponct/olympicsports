<?php
require '../conf/settings.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM sports";
$result = $conn->query($sql);

$conn->close();

if ($result->num_rows > 0) {
	echo '<input type="text" id="sportsInput" onkeyup="searchSports()" placeholder="Search sports..">';
	echo '<table id="sportsTable">';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>'.
    			 '<td>'. $row["name"]. '</td>'.
			 '</tr>';
	}
	echo '</table>';
}
