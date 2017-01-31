<?php

require_once("lib/data-functions.php");
$data = $_POST;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<form action="" method="post">
Student's name:
    <input type="text" name="name">
    <br>
Bio:
    <br>
    <textarea name="bio"></textarea>
    <br>
Sex:
    <br>
    <input type="radio" name="sex" value="Male" id="Male"><label for="Male">Male</label><br>
    <input type="radio" name="sex" value="Female" id="Female"><label for="Female">Female</label><br>
    <br>
Year:
    <br>
    <select name="year">
        <option value="1" selected>1</option>  <!--you can add value attribute, it will be sent instead of the whole option-->
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br>
    <input type="submit">
</form>
<?php insert_data($data); ?>
<a href="list.php">List of students</a>
</body>
</html>
