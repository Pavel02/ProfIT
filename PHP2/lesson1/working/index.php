<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
// $res = $db->execute('CREATE TABLE foo (id SERIAL)');      // Для промежуточной отладки
// var_dump($res);                                             // Вначале выведет bool(true)
                                                            // Если обновить страницу, то уже bool(false)

$data = $db->query('SELECT * FROM foo');

var_dump($data);



