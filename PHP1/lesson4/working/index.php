<html>
<head>
    <title> Занятие №4 </title>
</head>
<body>

<?php



$res = file(__DIR__ . '/db.txt');
var_dump($res);


/*
//открываем файл (Функция fopen открывает файл возвращает соединение (ресурс))
$res = fopen(__DIR__ . '/db.txt', 'r');

// читаем из открытого файла (ресурса) ОДНУ строчку и записываем в переменную
$str = fgets($res);
echo $str;

// функция file end of file возвращает true если достигнут конец файла
while (!feof($res)) {
    $str = fgets($res);
    echo $str;
}

// закрываем ресурс (это делать необязательно (по окнчании скрипта он и так закроется),
// но это хороший тон)
fclose($res);*/






?>


<?php
/*$i = 1;

while ($i < 10) {
    echo $i;
    $i++;
}

// 2 вид заиси цикла while
do {
    echo $i;
    $i++;
} while ($i < 10);

*/?>

</body>
</html>