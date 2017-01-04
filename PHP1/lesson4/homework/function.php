<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 026 26.12.16
 * Time: 16:00
 */


//Функция считывает содержимое файлов и возвращает массив строчек файла
function readPosts($name) {
// C помощью функции file из файла формируем массив
    $result = file(__DIR__ . '/' . $name);
// var_dump($result);    Проверил что файл прочитан и сформирован массив
    return $result;
}