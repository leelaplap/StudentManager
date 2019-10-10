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
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>Tên</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Tuổi</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Lớp</td>
            <td><input type="text" name="class"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Add"></td>
        </tr>
    </table>
</form>
<table style="border-collapse: collapse; width: 100%">
    <caption><h1>DANH SÁCH LỚP</h1><caption>
    <tr>
        <td>STT</td>
        <td>Tên</td>
        <td>Tuổi</td>
        <td>phone</td>
        <td>Lớp</td>
    </tr>
    <?php
    include_once "StudentManager.php";
    $studentList = new StudentManager("data.json");
    $list = $studentList->getListStudent();
    foreach ($list as $key => $item) {

        ?>
        <tr>
            <td><?php echo $key + 1 ?></td>

            <td><?php echo $item->name?></td>

            <td><?php echo $item->age ?></td>

            <td><?php echo $item->phone ?></td>

            <td><?php echo $item->class ?></td>

        </tr>
    <?php }
    ?>

</table>
</body>
</html>