<?php
function isEvenOrOdd($number) {
    if (!($number % 2)){
        return $number / 2;
    }else{
        return $number * 3;
    }
}

$num = 8;
?>

<h1>Source number: <?php echo $num; ?></h1>
<h1>Result: <?php echo isEvenOrOdd($num); ?></h1>
