<html>
<head>
    <title> Буфер вывода </title>
</head>
<body>
<?php
//Ответ клиненту - это нкий поток байт. Если поток отправлен, то он ушел клиенту, его нельзя вернуть
//Результат работы программы на РНР это строка

//Спец функция. Она как бы ставит открывающую скобку. Она начинает перенаправлять весь поток в БУФЕР
ob_start();     //Весь поток начинает писаться в буфер. Поток не попадает к клиенту.

echo 'hello!';
$str = ob_get_contents();    //В переменную $str мы забираем все что к этому моменту накопиловь в буфере

ob_end_clean();    //Останавливает буферизацию и очищает этот буфер. Все что наход между в выходной поток не попадет.

echo 'world!';
echo $str;

// 1. Требуется когда нужно изменить порядок вывода на экране
// 2. Когда нужно изменить, что-то якобы уже выведенное


?>
</body>
</html>