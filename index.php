<?php
$servername = "localhost";
$username = "practice";
$password = "parola";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn2 = new mysqli("192.168.0.106","marius","");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfullyyyy" . "<br>";

$sql = "SELECT name,password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name " . $row["name"]. " password " . $row["password"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

echo "<br>";

$sql = "SELECT user,host FROM mysql.user";
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user " . $row["user"]. " host " . $row["host"]."<br>";
    }
} else {
    echo "0 results";
}

$conn2->close();
?>
