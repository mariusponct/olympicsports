<?php
require '../conf/settings.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT events_women FROM sports WHERE name='". str_replace('_', ' ', $_GET['name']). "'";
$result = $conn->query($sql);
$conn->close();

$row = $result->fetch_row();
if ($result->num_rows == 1 ){
	echo '<p>'. str_replace(', ', "<br>", $row[0]). '</p>';	
}
?>
