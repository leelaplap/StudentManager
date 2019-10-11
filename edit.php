<?php

include_once "StudentManager.php";

$id = $_GET["id"];

$manager = new StudentManager("data.json");
$array = $manager->getStudentsIndex($id);

?>

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
<form method="post" action="editSuccess.php">
    <table>
        <tr style="display: none">
            <td>id</td>
            <td><input type="text" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Tên</td>
            <td><input type="text" name="name" value="<?php echo $array->name ?>"></td>
        </tr>
        <tr>
            <td>Tuổi</td>
            <td><input type="text" name="age" value="<?php echo $array->age ?>"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone" value="<?php echo $array->phone ?>"></td>
        </tr>
        <tr>
            <td>Lớp</td>
            <td><input type="text" name="class" value="<?php echo $array->class ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="update"></td>
        </tr>
    </table>
</form>

</table>
</body>
</html>