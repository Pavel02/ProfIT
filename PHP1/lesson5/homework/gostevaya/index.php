<html>
<head>
    <title> Гостевая. Реализация через классы </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

echo 'Домашнее задание к уроку №5 <br> <br>';
echo '1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:<br>
    - В конструктор передается путь до файла с данными гостевой книги, в нём же происходит<br> 
    чтение данных из нее (используйте защищенное свойство объекта для хранения данных)<br>
    - Метод getData() возвращает массив записей гостевой книги<br>
    - Метод append($text) добавляет новую запись к массиву записей<br>
    - Метод save() сохраняет массив в файл<br>
    2.* Продумайте - какие части функционала можно вынести в базовый (родительский) класс TextFile,<br>
     а какие - сделать в унаследованном от него классе GuestBook <br>';

require __DIR__ . '/classes.php';
?>

<h2>Гостевая книга сайта. Здесь Вы можете оставить свой отзыв!</h2>

<?php
    $foo = new GuestBook('gostevaya.bd'); //Новый объект foo
    $mass = $foo->getData();        //Массив данных записей
    var_dump($mass);
?>
</body>
</html>