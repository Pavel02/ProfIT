<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 028 28.12.16
 * Time: 10:43
 */

class GuestBook 
{   
    protected $bd;

    //В конструктор передается имя файла с БД записями гостевой
    public function __construct($path) {
        $this->bd = file(__DIR__ . '/' . $path);  //Защищенное свойство получает массив записей из БД
    }

    //метод возвращает массив записей гостевой книги
    public function getData() {
        return $this->bd;
    }
    
    public function append($text) {
        
    }

}