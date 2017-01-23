<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model
{
    // public static $table = 'users';     // Статич свойство с названием таблицы
    const TABLE = 'users';

    public $email;
    public $name;
/*
    public static function findAll()    // Добавляем статич метод
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM' . self::$table,     // Использ стат свойство
            'App\Models\User'
        );
    }
*/

/*
    public static function findAll()    // Добавляем статич метод
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . self::TABLE,     // Использ константа
            'App\Models\User'
        );
    }
*/

/*                                      // Реализуем этот метод в род классе и отсюда его можно убрать
    public static function findAll()    // Добавляем статич метод
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . self::TABLE,
            self::class                     // У каждого класса есть констант class (Жто полное имя этого класса)
        );
    }
*/

    public function getName()
    {
            // здесь выполнение некого кода
    }

}



