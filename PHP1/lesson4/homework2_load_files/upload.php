<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 027 27.12.16
 * Time: 9:56
 */
var_dump($_FILES);


//Проверяем, что пользователь загрузил файл (глобальный массив будет не пустой)
if (!empty($_FILES)) {
    $uploaded = $_FILES['newimage']; //Присваиваем переменной массив, характеризующий переданный файл.
    //элемент массива с кодом ошибкм и устанавливаем ограничение на тип файла
    if (($uploaded['error'] == 0) &&
        (($uploaded['type'] === 'image/png') || ($uploaded['type'] === 'image/jpeg'))) {
        //Спец функция для загржуенных файлов (2 аргумента откуда и куда)
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/images/' . $uploaded['name']
        );
        echo 'Файл успешно загружен.';
    } else {
        echo 'Выбранный файл не является изображением и не может быть загружен. ';
    }
}