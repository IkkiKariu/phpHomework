<?php

$numbersString = '123';

$sum = 0;

foreach (str_split($numbersString) as $digitChar)
{
    $sum += (int) $digitChar;
}
?>

<h1>Строка: <?php echo $numbersString; ?></h1>
<h1>Сумма цифр: <?php echo $sum; ?></h1>