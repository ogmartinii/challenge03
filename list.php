<?php
require_once('lib/data-functions.php');
$data = get_index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
<?php foreach($data as $unique_id => $name) : ?>
    <ul>
        <li><?php echo $data[$unique_id]; ?></li>
        <a href="detail.php?id=<?php echo $unique_id; ?>">Detail</a>
    </ul>
<?php endforeach; ?>
<a href="index.php">Back to form</a>
</body>
</html>