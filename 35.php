<?php
function findSumOfSquaredNumbers($firstNum, $secondNum) {
    return $firstNum**2 + $secondNum**2;
}

$firstNumber = 3;
$secondNumber = 4;
?>

<h1>Numbers: <?php echo $firstNumber; ?>, <?php echo $secondNumber; ?></h1>
<h1>Sum of their squares: <?php echo findSumOfSquaredNumbers($firstNumber, $secondNumber); ?></h1>