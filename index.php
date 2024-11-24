<?php
require_once('student.php');

if(isset($_POST['btn'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $student = new Student($id,$name);
    $student->save();
    echo"Success";
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="#" method="post">
            <table>
                <tr>
                    Id: <br>
                    <input type="text" name="id" style="width: 200px;">
                </tr><br>
                <tr>
                    Name: <br>
                    <input type="text" name="name" style="width: 200px;">
                </tr><br>
                <tr>
                    <input type="submit" name="btn">
                </tr>
            </table>
        </form>
        <?php
        Student::display();
        ?>
</body>
</html>