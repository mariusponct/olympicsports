<?php
require '../conf/settings.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<div class="row justify-content-center text-center h5">'.
		'<div class="col-md-6">';
$sql = "SELECT description FROM sports WHERE name='". str_replace('_', ' ', $_GET['name']). "'";
$result = $conn->query($sql);
$row = $result->fetch_row();
if ($result->num_rows == 1 ){
	echo '<p class="sports_description">'. $row[0]. '</p>';	
}else{
	echo 'This sport has no description.';
}
echo	'</div>'.
	 '</div>';



$conn->close();

