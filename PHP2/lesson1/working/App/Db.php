<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        // автоматически создается соединение к базе и возвращаем соединение в свойство объекта
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=testphp2', 'root', '');
    }

    public function execute($sql)    // Хочется иметь метод, выполняющий любой sql запрос к БД
    {
        $sth = $this->dbh->prepare($sql);   // Возвращается подготовленный запрос
        $res = $sth->execute();             // Результат true или false (т.е. удалось ли выполнение запроса)
        return $res;

    }


}