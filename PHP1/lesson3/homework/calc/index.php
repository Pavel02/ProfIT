<?php
require __DIR__ . '/func.php';

// проверяем есть ли вообще данные и если есть, то обрабатываем данные от пользователя
if (isset($_POST['x'])) {
    $x = (int)$_POST['x'];
} else {
    $x = null;
}

if (isset($_POST['y'])) {
    $y = (int)$_POST['y'];
} else {
    $y = null;
}

$ops =['+', '-', '*', '/'];    //массив допустимых операций
if (isset($_POST['op']) && in_array($_POST['op'], $ops)) {
    $op = $_POST['op'];
} else {
    $op = null;
}

$res = calculate($x, $y, $op);

?>

<html>

<head>
    <title>Калькулятор</title>
</head>

<body>
    <div>№1 Напишите программу-калькулятор <br>
        - Форма для ввода двух чисел, выбора знака операции и кнопка "равно"<br>
        - Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт,
                                который их примет и выведет выражение и его результат <br>
        - * Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
            введенные числа останутся в input-ах, а результат появится после кнопки "равно" <br>
    </div>

    <form action="/lesson3/homework/calc/index.php" method="post">
        <input type="number" name="x" value="<?php echo $x ?>">
        <select name="op">
            <option value="+" <?php if ('+'==$op) { ?> selected <?php } ?>>+</option>
            <option value="-" <?php if ('-'==$op) { ?> selected <?php } ?>>-</option>
            <option value="*" <?php if ('*'==$op) { ?> selected <?php } ?>>*</option>
            <option value="/" <?php if ('/'==$op) { ?> selected <?php } ?>>/</option>
        </select>
        <input type="number" name="y" value="<?php echo $y ?>">
        <input type="submit" value="=">
        <?php echo $res; ?>

    </form>


</body>

</html>