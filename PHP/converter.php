<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<p class="text">Данный сайт поможет Вам сконвертировать дюймы в сантиметры</p><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" method="post">
    <label for="dm" class="label">Введите кол-во дюймов : </label>
    <input type="text" class="input" id="dm" name="dm"><br><br>
    <input type="submit" class="input" name="submit" value="CONVERT"><br><br>
</form>
<?php
    if(isset($_POST['submit']) and !empty($_POST['dm'])){
        if(is_numeric($_POST['dm']) and $_POST['dm'] > 0){
            $result = round(2.54*$_POST['dm'],2);
            echo "Ваш результат = ".$result;
        }
        else{
            echo "Необходимо Ввести Положительное Числовое Значение";
        }
    }
?>
</body>
</html>