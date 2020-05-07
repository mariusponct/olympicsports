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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
EOL;

$first_image_flag = true;

while ($row = $result->fetch_assoc()) {
  if ($first_image_flag) {
    echo '<div class="item active">';
    $first_image_flag = false;
  } else {
    echo '<div class="item">';
  }
  echo '<img src="images/'. str_replace(' ', '_', $row["name"]). '_large.jpg" alt="'. $row["name"]. ' image">'.  
         '</div>';
}
  
echo <<<EOL
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
EOL;


