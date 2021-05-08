<?php
    include("assets/connect.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
    <?php include("menu.php");?>
    <h2>Регистрация</h2>
    <form action="" method="post">
        <input type="text" name="nickname" id="" placeholder="Введите имя пользователя">
        <input type="email" name="email" id="" placeholder="Введите Email">
        <input type="password" name="password" id="" placeholder = "Введите пароль">
        <input type="password" name="repeatPassword" id="" placeholder = "Повторите пароль">

        <input type="submit" value="Зарегистрироваться">
    </form>
    <?php
        if(isset($_POST['nickname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['repeatPassword']))
        {
            if($_POST['nickname'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repeatPassword'] != '')
            {
                $getUsersQuery = $db -> query("SELECT * FROM `users`");
                $getUser = mysqli_fetch_array($getUsersQuery);
                if($getUser['email' == $_POST['email']])
                {
                    echo "Такой пользователь, есть в системе";
                }
                else
                {
                    if($_POST['password'] == $_POST['repeatPassword'])
                    {
                        $userReg = $db -> query("
                        INSERT INTO `users`(
                            `id`,
                            `nickname`,
                            `email`,
                            `password`,
                            `role`
                        )
                        VALUES(NULL, '$_POST[nickname]', '$_POST[email]', '$_POST[password]', '0')
                        ");
                        
                        if($userReg)
                        {
                            echo "Пользователь успешно зарегистрирован";
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>