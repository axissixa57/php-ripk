<?php
    include "library/db.php";
    include "library/core.php";
    $_GET['image1'] = 'images/image1.jpg';
    $_GET['image2'] = "images/image2.jpg";
    dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
</head>
<body>
    <img src="<?php echo $_GET['image1']?>" alt="image1">
    <img src="<?php echo $_GET['image2']?>" alt="image2">
    <?php  ?>
</body>
</html>