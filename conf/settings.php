<?php

$local_settings_file_path="/";
$local_settings_file_name="local_settings.php";

if(file_exists($local_settings_file_path.$local_settings_file_name)) {
    include $local_settings_file_path.$local_settings_file_name;
}else {
	//Define default Database connection
	$servername = "localhost";
	$username 	= "olympicsports_user";
	$password 	= "olympicsports_password";
	$dbname 	= "olympicsports";
}
?>