<html>
<head>
    <title> Загрузка файлов от пользователей. Реализация через классы </title>
</head>
<body>
<?php

echo 'Домашнее задание к уроку №5 <br> <br>';
echo 'Решите задачу загрузки файла от пользователя в заданное место на 
    сервере с тем же именем файла, что он имел на компьютере пользователя. <br>
     Решите задачу ограничения загрузки, например - только файлов JPEG и PNG <br>
     Модифицируем предыдущее домашнее задание в соответствии с новыми знаниями: <br>
     3. Создайте класс Uploader в соответствии с требованиями:<br>
    - В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла <br>
    - Метод isUploaded() проверяет - был ли загружен файл от данного имени поля <br>
    - Метод upload() осуществляет перенос файла (если он был загружен!) из временного места 
    в постоянное <br>
    4.* Попробуйте некоторые методы заканчивать конструкцией return $this; и 
    придумайте этому применение <br>';

?>

//Форма отправки файла на скрипт upload.php
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="newimage">
    <input type="submit">
</form>



</body>
</html>
