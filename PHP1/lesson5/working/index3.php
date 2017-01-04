<html>
<head>
    <title>Наследование</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 027 27.12.16
 * Time: 12:49
 */

//Насследование - передача по наследству свойств и методов
//Выстраивается иерархия классов

//Создаем общий класс Item мебель
class Item {
    public $color;
    public $material;

    public function showColor() {
        echo 'Мой цвет: ' . $this->color;
    }
}

//класс Table рассширяет класс Item (добавляет что-то свое)
// при этом наследуя ВСЕ свойства и методы, которые есть у родительского класса
class Table extends Item {
    public  $legs;

    //Можем перекрыть родительский метод showColor
    public function showColor()
    {
        echo 'Я потомок!';
        parent::showColor();   //Вызывается родительский метод внутри перекрытого метода предка
    }
}

$table1 = new Table;
$table1->color = 'red';        //  У стола появился метод color от родительского класса
$table1->legs = 4;
echo $table1->color;
echo $table1->legs;
$table1->showColor();           //  У стола появилось свойство showColor  от родительского класса


//У наследника ВСЕГДа только один предок
//В РНР нет множественного наследования!!
//но у предка сколько угодно потомков

?>

</body>
</html>