<?php
require '../src/element_head.php';
echo "Sport: " . str_replace('_', ' ', $_GET['name']);
require '../src/element_showDescription.php';
require '../src/element_showImage.php';
?>