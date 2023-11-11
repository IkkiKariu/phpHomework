<?php

function findSCM($firstNum, $secondNum) {
    for ($i = 1; $i <= $firstNum * $secondNum; $i++) {
        if ($i % $firstNum == 0 && $i % $secondNum == 0) {
            return $i;
        }
    }
}

$firstNumber = 3;
$secondNumber = 4;
?>

<h1>Наименьшее общее кратное чисел <?php echo $firstNumber; ?> и <?php echo $secondNumber; ?> - <?php echo findSCM($firstNumber, $secondNumber) ?></h1>