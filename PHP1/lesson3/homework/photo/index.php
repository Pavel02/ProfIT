<?php

$images = include __DIR__ . '/data.php';

?>

<html>
<head>
    <style>
        .photo {
            margin: 10px;
        }
        .photo img {
            border: 2px solid red;
            width: 200px;
        }
    </style>
    <title>Фотогалерея</title>
</head>
<body>
    <div>№2 Создайте примитивную фотогалерею из двух страниц<br>
        - Пусть на главной странице галереи выводятся 3-4 изображения<br>
        - Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения<br>
        - На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его.<br>
        Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ],<br>
        однако вы можете предложить и другое решение
    </div>

    <h1>Фотогалерея</h1>

    <?php foreach ($images as $num => $image) { ?>
    <div class="photo">
        <a href="/photo/image.php?file=<?php echo $num; ?>">
        <img src="/photo/images/<?php echo $image ?>">
        </a>
    </div>
    <?php } ?>

  </body>
</html>