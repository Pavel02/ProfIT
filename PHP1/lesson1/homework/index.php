<html>
<head></head>


<body>

<?php
echo 'Домашнее задание к уроку1 <br><br>';

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




?>
</body>

</html>