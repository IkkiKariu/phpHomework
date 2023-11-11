<?php
$greetingsArr = ['Привет, ', 'мир', '!'];
echo '<h1>Given: ' . join($greetingsArr) . '</h1>';

$greetingsArr[0] = 'Пока, ';
echo '<h1>Result: ' . join($greetingsArr) . '</h1>';
?>
