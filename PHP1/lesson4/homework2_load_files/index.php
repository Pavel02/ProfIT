<html>
<head>
    <title> Загрузка файлов от пользователей </title>
</head>
<body>
<?php

echo 'Домашнее задание к уроку №4 <br> <br>';
echo 'Решите задачу загрузки файла от пользователя в заданное место на 
    сервере с тем же именем файла, что он имел на компьютере пользователя. <br>
     Решите задачу ограничения загрузки, например - только файлов JPEG и PNG';
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="newimage">
    <input type="submit">
</form>

</body>
</html>