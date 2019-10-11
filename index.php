
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="add.php">
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
            <td><a href="edit.php?id=<?php echo  $key?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $key?>">Delete</a></td>

        </tr>
    <?php }
    ?>

</table>
</body>
</html>