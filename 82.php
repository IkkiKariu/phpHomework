<?php
//Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3

$arr = [43, 11, 91, 939, 349, 763];
?>
<h1><?php foreach ($arr as $number)
{
    if (str_contains($number, '3'))
    {
        echo $number . ' ';
    }
}?>
</h1>