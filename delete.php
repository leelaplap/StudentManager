<?php
include_once "StudentManager.php";
$index = $_GET["id"];
$manager = new StudentManager("data.json");
$manager->delete($index);
header("Location:index.php");