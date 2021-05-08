<?php
    session_start();
    include("assets/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("menu.php");?>
    <?php
        if(isset($_SESSION['nickname']))
        {
            echo "Вы авторизированы как, <b>{$_SESSION['nickname']}</b> <br> Для выхода нажмите <a href='logout.php'>сюда</a>";
        }
        else
        {
            echo "В данный момент вы на сайте как ГОСТЬ, вы можете оставаться Гостем. <br>Либо <a href='login.php'>ВОЙТИ В АККАУНТ</a> /<a href='registration.php'>ЗАРЕГИСТРИРОВАТЬСЯ</a>";
        }
    ?>
</body>
</html>