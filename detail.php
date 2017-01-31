<?php 
require('lib/data-functions.php');
$unique_id = ($_GET['id']);
$student_detail = get_data($unique_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo($student_detail['name']); ?></title>
</head>
<body>
    <h1><?php echo $student_detail['name']; ?></h1>
    Name: <?php echo $student_detail['name']; ?><br>
    Biography: <?php echo $student_detail['bio']; ?><br>
    Sex: <?php echo $student_detail['sex']; ?><br>
    year: <?php echo $student_detail['year']; ?>
    <br><a href="list.php">Back to list</a>
</body>
</html>