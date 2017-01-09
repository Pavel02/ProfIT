<html>
<head>
    <title> Гостевая книга </title>
    <style>
        article {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted green;
        }
    </style>
</head>
<body>

<h1>Записи:</h1>

<hr>

<!-- Ниже в 3-ч строчках при помощи PHP мы напишем логику представления (то что увидит пользователь) -->
<?php foreach ($data as $line) { ?>
<article><?php echo $line->getMessage(); ?></article>
<?php } ?>

<!-- Шаблон пишем в основном на HTML , но когда нужно смело используем PHP чтобы задать логику именно ОТОБРАЖЕНИЯ-->

</body>
</html>