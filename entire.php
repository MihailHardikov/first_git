<!doctype html>
<html lang="ru">
<?php
    require_once ('MODULES/data_images.php');
    $img = array_images[$_GET['index']];
?>
<head>
    <meta charset="utf-8" />
    <title><?php echo $img['desc']; ?>::galery</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<h1 class="h1">Your Image</h1>
<p class="text"><?php echo $img['desc']; ?></p>
<img src="<?php echo $img['src']; ?>" alt="" class="image">
</body>
</html>