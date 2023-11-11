<?php
// для трёхзначных чисел
function findDigitSum($number) {
    $sum = floor($number / 100) + floor($number / 10) % 10 + $number % 10;

    return $sum;
}

$num = 674;
?>

<h1>Сумма разрядов числа <?php echo $num; ?> равна <?php echo findDigitSum($num); ?></h1>
