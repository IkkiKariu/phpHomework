<?php
$arr = ['Коля'=>'200' ,'Вася'=>'300', 'Петя'=>'400'];

foreach($arr as $key => $value)
{
    echo "<h2>{$key} - зарплата {$value} долларов</h2>";
}
?>