<?php

require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook(__DIR__ . '/db.txt');    //Это лоигка приложения. Создали объект, запросили данные
$data = $gb->getAll();                      //Этот код получает данные из гостевой книги

include __DIR__ . '/templates/index.php';   //подключили файл с логикой ПРЕДСТАВДЛЕНИЯ
                                            //Теперь в подключенном файле '/templates/index.php' нам будут доступны
                                            //переменные из этого файла (например $data)