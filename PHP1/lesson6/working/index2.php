<html>
<head>
    <title>   ORM - Object Relation Mapping   </title>
</head>
<body>
<?php

//Объекты принято использовать в качестве МОДЕЛЕЙ данных
//Шаблон проектирования ORM - это
//ПРИНЦИП отображения объектов реального мира и их связей между собой на объекты вашего языка программирования
//есть объекты реального мира, которые важны для вашей программы, им должны соотвествовать объекты в программе
//ORM это принцип который говорит, что каждому объекту в реальности должен соответсвовать некий объект в вашей программе

//Классы описывают какие объекты у нас могут быть
//Сами объеты реал мира представлены объектами языка РНР
//

class GuestBookRecord   //Простейший класс, предстваляющий одну запись в гостевой книге
{
    protected $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
}

class GuestBook         //Класс гостевая книга
{
    protected $file;
    public function __construct($file) {    //На вход получаем файл с записями
        $this->file = $file;
    }
    public function getAll() {              //Метод получения всех записей
        $data = file($this->file);
        $ret = [];                                                   //Создаем новый пустой массив, который будет на выходе из функции
        foreach ($data as $line) {                          //Проходимся по старому массиву
            $ret[] = new GuestBookRecord($line);            //Создаем массив в котором каждый элемент это объект
        }
        return $ret;                                        //Возвращается масссив объектов
    }
}

/*    ЭТА ФУНКЦИЯ БОЛЬШЕ НЕ НУЖНА МЫ ЕЕ ИНКАПСУЛИРОВАЛИ В КЛАСС GuestBook
function getAllGBRecords()      //Функция получает все записи из гостевой книги
{
    //return file(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);   //  Такая функция должна была быть раньше

    //Сделаем так, чтобы функция возвращала не массив строк, а массив ОБЪЕКТОВ принцип ORM
    $data = file(__DIR__ . '/db.txt' , FILE_IGNORE_NEW_LINES);  //Получилич массив данных из файла
    $ret = [];                                                   //Создаем новый пустой массив, который будет на выходе из функции
    foreach ($data as $line) {                          //Проходимся по старому массиву
        $ret[] = new GuestBookRecord($line);            //Создаем массив в котором каждый элемент это объект
    }
    return $ret;                                        //Возвращается масссив объектов
}*/

$gb = new GuestBook(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);  //Весь грязный код спрятан в 2-х классах

//var_dump(getAllGBRecords());    Эта проверка для функции
var_dump( $gb->getAll() );


// В РНР объекты передаются по ССЫЛКЕ ! В время передачи объекта в функцию объект не копируется( объект всегда существуют в одном экземпляре)
// А вот припередаче массива создается копия масссива



?>
</body>
</html>