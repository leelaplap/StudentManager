<?php
include_once "User.php";
include_once "StudentManager.php";
include_once "Student.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $class = $_POST["class"];

    $newStudent = new Student($name, $age, $phone, $class);
    $newStudentManager = new StudentManager("data.json");

    $newStudentManager->add($newStudent);

}

header("Location:index.php");
?>
