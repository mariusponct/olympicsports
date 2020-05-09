<?php
require '../conf/settings.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM sports ORDER BY rand() limit 3";
$result = $conn->query($sql);

$conn->close();

echo <<<EOL
<div class="row justify-content-center">
  <div class="col-md-6">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="box-shadow: 0px 0px 75px 50px #17252a">
EOL;

$first_image_flag = true;

while ($row = $result->fetch_assoc()) {
  if ($first_image_flag) {
    echo '<div class="carousel-item active">';
    $first_image_flag = false;
  } else {
    echo '<div class="carousel-item">';
  }
  echo '<img src="images/'. str_replace(' ', '_', $row["name"]). '_large.jpg" alt="'. $row["name"]. ' image" class="img-fluid">'.  
         '</div>';
}
  
echo <<<EOL
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</div>
EOL;


