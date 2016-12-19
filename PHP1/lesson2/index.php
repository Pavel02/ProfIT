<html>
<head></head>


<body>

<?php
/*echo 'Домашнее задание к уроку1 <br><br>';

echo '№3 В PHP есть функция var_dump($something), которая выводит подробную информацию о значениях и их типах. Попробуйте написать что-нибудь вроде var_dump(2*2); чтобы увидеть, как она работает. 
Изучите с помощью этой функции следующие выражения:
 - 3 / 1
 - 1 / 3
 - \'20cats\' + 40
 - 18 % 4 (прочтите главу http://fi2.php.net/manual/ru/language.operators.arithmetic.php чтобы узнать, что это такое) <br>';

echo 'Когда $something = 2 * 2 <br>';
    $something = 2 * 2;
    var_dump ($something);

echo '<br> Когда $something = 3 / 1 <br>';
    $something = 3 / 1;
    var_dump ($something);

echo '<br> Когда $something = 1 / 3 <br>';
    $something = 1 / 3;
    var_dump ($something);

echo '<br> Когда $something = "20cats73" + 40 <br>';
    $something = '20cats73' + 40 ;
    var_dump ($something);

echo '<br> Когда $something = 18 % 4 <br>';
    $something = 18 % 4;
    var_dump ($something);
echo '<br> <br> <br>';



echo '№4 Говорят, что в PHP "всё является выражением". Интересно, что даже присваивание переменной какого-либо значения тоже является выражением! 
        Изучите примеры ниже и дайте ответ - что же является значением выражения присваивания? <br>
 - echo ($a = 2);<br>
 - $x = ($y = 12) - 8; echo $x; <br>';

echo '<br>  Для echo ($a = 2); <br>';
    echo ($a = 2);

echo '<br>  Для $x = ($y = 12) - 8; echo $x; <br>';
    $x = ($y = 12) -8;
    echo '$x <br> <br> <br> ';


echo '№5 В PHP имеется логический (boolean) тип, имеющий два значения - true (истина) и false (ложь). 
        Изучите с помощью var_dump() следующие выражения и объясните их (прочитайте предварительно http://fi2.php.net/manual/ru/language.operators.comparison.php ): <br>
1 == 1.0 <br>
1 === 1.0 <br> 
\'02\' == 2 <br> 
\'02\' === 2 <br>
\'02\' == \'2\' <br>';

echo '<br>  Для var_dump (1 == 1.0) <br>';
    var_dump (1 == 1.0);

echo '<br>  Для var_dump (1 === 1.0) <br>';
    var_dump (1 === 1.0);

echo '<br>  Для var_dump (\'02\' == 2) <br>';
    var_dump ('02' == 2);

echo '<br>  Для var_dump (\'02\' === 2) <br>';
    var_dump ('02' === 2);

echo '<br>  Для var_dump (\'02\' == \'2\') <br>';
    var_dump ('02' == '2');
?>*/


echo 'Домашнее задание к уроку2 <br><br>';

echo '№1 Напишите программу, которая составит и выведет в браузер таблицу истинности (  https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%B8%D1%81%D1%82%D0%B8%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8 ) для логических операторов &&, || и xor. <br>';


function  logicalAnd ($a, $b) {
    if ($a == 0)  {
        echo '0';
    } elseif ($b == 0) {
        echo '0';
    } else
        echo 1;
}

function logicalOr ($a, $b) {
    if ($a == 1) {
        echo '1';
    } elseif ($b == 1) {
        echo '1';
    } else
        echo '0';
}

function logicalXor ($a, $b) {
    if (($a == 1) != ($b == 1)) {
         echo '1';
    } else {
        echo '0';}
}
?>

<table border = "1" >
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a&&b</th>
    </tr>
    <tr>
        <th>0</th>
        <th>0</th>
        <th><?php logicalAnd(0, 0) ?></th>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <th><?php logicalAnd(0, 1) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <th><?php logicalAnd(1, 0) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <th><?php logicalAnd(1, 1) ?></th>
    </tr>
</table>

<table border = "1" >
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a||b</th>
    </tr>
    <tr>
        <th>0</th>
        <th>0</th>
        <th><?php logicalOr(0, 0) ?></th>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <th><?php logicalOr(0, 1) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <th><?php logicalOr(1, 0) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <th><?php logicalOr(1, 1) ?></th>
    </tr>
</table>

<table border = "1" >
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a XOR b</th>
    </tr>
    <tr>
        <th>0</th>
        <th>0</th>
        <th><?php logicalXor(0, 0) ?></th>
    </tr>
    <tr>
        <th>0</th>
        <th>1</th>
        <th><?php logicalXor(0, 1) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>0</th>
        <th><?php logicalXor(1, 0) ?></th>
    </tr>
    <tr>
        <th>1</th>
        <th>1</th>
        <th><?php logicalXor(1, 1) ?></th>
    </tr>
</table>
<br> <br>

<?php
echo '№2 Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. 
        Используя эту функцию, напишите программу, которая решает квадратное уравнение. 
        Оформите красивый вывод решения. <br>';

function discriminant($a, $b, $c) {
// ax2 + bx + c =0
// D = b2 -4ac
    $Discr =  $b**2 - 4*$a*$c;
    return $Discr;
}

function result($a, $b, $D) {
    $x1 = (-$b + sqrt($D))/2*$a;
    $x2 = (-$b - sqrt($D))/2*$a;
    echo '1 корень квадратного уравнения = ' .$x1. '<br>';
    echo '2 корень квадратного уравнения = ' .$x2 . '<br>';
}

$D = discriminant(1, 2, 0);
result(1, 2, $D);

$D = discriminant(1, 0, 0);
result(1, 0, $D);

assert( 4 == discriminant(1, 2, 0) );
assert( 0 == discriminant(1, 2, 1) );

?>

<?php
echo '<br><br>';
echo '№3 Проведите самостоятельное исследование на тему "Что возвращает оператор include, 
если его использовать как функцию?". 
Используйте руководство по языку, составьте и приложите примеры, 
иллюстрирующие ваше исследование. <br>';


?>

<?php
echo '<br><br>';
echo '№4 Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось).
Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции. <br>';

?>
</body>

</html>