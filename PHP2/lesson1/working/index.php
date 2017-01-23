<?php

require __DIR__ . '/autoload.php';

// $db = new \App\Db();
// $res = $db->execute('CREATE TABLE foo (id SERIAL)');      // Для промежуточной отладки
// var_dump($res);                                             // Вначале выведет bool(true)
                                                            // Если обновить страницу, то уже bool(false)

// $data = $db->query('SELECT * FROM foo');                 // Для отладки метода с возвратом данных
// var_dump($data);


/*$data = $db->query(
    'SELECT * FROM users', 
    'App\Models\User'
);
var_dump($data);     */                                   // На выходе будет массив элементы которого это объекты заданного класса


// echo \App\Models\User::$table;                  // Вызов стат метода класса User

$users = \App\Models\User::findAll();           // Мы не создаем никаких объектов. Мы сразу вызывае метод класса.
                                                // Можно представить, что стат метод, это фукция, лежащая внутри класса
var_dump($users);


