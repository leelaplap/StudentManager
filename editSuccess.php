<?php
include_once "StudentManager.php";


$manager = new StudentManager("data.json");
$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$class = $_POST["class"];

$newStudent = new Student($name, $age, $phone, $class);
$manager->edit($id,$newStudent);
header("Location:index.php");