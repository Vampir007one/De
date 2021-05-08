<?php
    // session_start();
    include("assets/connect.php");
?>
<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Добавить видео</title>
</head>
<body>
    <h2>Добавить видео</h2>
    <?php
        // if(isset($_SESSION['nickname']))
        // {}
    ?>
    <form action="" method="post" enctype="multipart/form-data" class="video_upload">
        <!-- <input type="text" name="video_name" id="" placeholder="Введите название видео">
        <textarea name="video_description" id="" cols="30" rows="10" placeholder="Введите описание"></textarea>
        <input type="datetime" name="video_uploadDate" id="" value="<?php echo date("m.d.y H:i:s");?>">
        <select name="video_category" id="" >
            <option value="0">Выбери категорию</option>
            <option value="1">Первая категория</option>
            <option value="2">Вторая категория</option>
            <option value="3">Третья категория</option>
        </select> -->
        <input type="file" name="video_file" id="">
        <input type="submit" value="Загрузить видео">
    </form>
    <?php
        print_r($_FILES['video_file']);
    ?>
</body>
</html>
