<?php

$num = $_GET['file'];
$images = include __DIR__ . '/data.php';

?>

<img src="/photo/images/<?php echo $images[$num]; ?>">
