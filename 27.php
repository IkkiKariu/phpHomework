<?php
function func($number) {
    if ($number >= 50){
        return $number ** 2;
    }else if($number > 10 && $number < 30) {
        return 0;
    }else {
        return "Ошибка";
    }
}

$num = 30;
?>

<h1>Source number: <?php echo $num; ?></h1>
<h1>Result: <?php echo func($num); ?></h1>