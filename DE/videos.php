<?php
    session_start();
    include("assets/connect.php");
?>
<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Видеоролики</title>
</head>
<body>
<?php include("menu.php");?>
<div class="addvideo">
    <h2>Видеоролики</h2>
    <?php
        if(isset($_SESSION['nickname']))
        {
            echo "<a href='addvideo.php'>+</a>";
        }
    ?>
    
</div>
<div class="videos">
    <!-- Первое видео -->
    <div class="video">
        <div class="video__body"></div>
        <h4 class="video__title"><a href="">Название</a><h4>
        <h4 class="video__title">Дата опубликования: 25.05.21<h4>
        <div class="video__likesAndDislikes">
            <p class="likes"><a href="">+10</a></p>
            <p class="dislikes"><a href="">-10</a></p>
        </div>
    </div>
    <!--  -->
    <!-- Второе видео -->
    <div class="video">
        <div class="video__body"></div>
        <h4 class="video__title"><a href="">Название</a><h4>
        <h4 class="video__title">Дата опубликования: 25.05.21<h4>
        <div class="video__likesAndDislikes">
            <p class="likes"><a href="">+10</a></p>
            <p class="dislikes"><a href="">-10</a></p>
        </div>
    </div>
    <!--  -->
    <!-- Третье видео -->
    <div class="video">
        <div class="video__body"></div>
        <h4 class="video__title"><a href="">Название</a><h4>
        <h4 class="video__title">Дата опубликования: 25.05.21<h4>
        <div class="video__likesAndDislikes">
            <p class="likes"><a href="">+10</a></p>
            <p class="dislikes"><a href="">-10</a></p>
        </div>
    </div>
    <!--  -->
    <!-- Четвёртое видео -->
    <div class="video">
        <div class="video__body"></div>
        <h4 class="video__title"><a href="">Название</a><h4>
        <h4 class="video__title">Дата опубликования: 25.05.21<h4>
        <div class="video__likesAndDislikes">
            <p class="likes"><a href="">+10</a></p>
            <p class="dislikes"><a href="">-10</a></p>
        </div>
    </div>
    
</div>

</body>
</html>