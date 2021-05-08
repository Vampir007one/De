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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php include("menu.php");?>
    <h2>Вход на сайт</h2>
    <form action="" method="post">
        <input type="text" name="email" id="" placeholder = "Введите Email">
        <input type="password" name="password" id="" placeholder = "Введите пароль">
        <input type="password" name="repeatPassword" id="" placeholder = "Повторите пароль">
        <input type="submit" value="Войти на сайт">
    </form>
    <?php
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repeatPassword']))
        {
            if($_POST['email'] != '' && $_POST['password'] != '' && $_POST['repeatPassword'] != '')
            {
                if($_POST['password'] == $_POST['repeatPassword'])
                {
                    $getUsersQuery = $db -> query("SELECT * FROM `users` WHERE `email` = '$_POST[email]' ");
                    $getUser = mysqli_fetch_array($getUsersQuery);
                    if($getUser[password] == $_POST['password'])
                    {
                        $_SESSION['nickname'] = $getUser['nickname'];
                        echo "Добро пожаловать, <b>{$getUser['nickname']}</b>";
                    }
                }
            }
        }
    ?>
</body>
</html>