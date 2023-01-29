<!doctype html>
<html lang="ru">
<?php
    require_once ('MODULES/data_images.php');

?>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
<header class="header">
    <nav class="nav">
        <ul class="list">
            <li class="item"><a href="" class="link_nav">Мой Профиль</a></li>
            <li class="item"><a href="" class="link_nav">Галерея</a></li>
            <li class="item"><a href="" class="link_nav">Log-in</a></li>
            <li class="item"><a href="" class="link_nav">Sign-Up</a></li>
        </ul>
    </nav>
</header>
<a href="entire.php?index=0" class="link"><img src="<?php echo array_images[0]['src'] ?>" alt="" class="img" title="<?php echo array_images[0]['desc'] ?>"></a>
<a href="entire.php?index=1" class="link"><img src="<?php echo array_images[1]['src'] ?>" alt="" class="img" title="<?php echo array_images[1]['desc'] ?>"></a>
<a href="entire.php?index=2" class="link"><img src="<?php echo array_images[2]['src'] ?>" alt="" class="img" title="<?php echo array_images[2]['desc'] ?>"></a>
<a href="entire.php?index=3" class="link"><img src="<?php echo array_images[3]['src'] ?>" alt="" class="img" title="<?php echo array_images[3]['desc'] ?>"></a>
<a href="entire.php?index=4" class="link"><img src="<?php echo array_images[4]['src'] ?>" alt="" class="img" title="<?php echo array_images[4]['desc'] ?>"></a>
</body>
</html>