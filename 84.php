<?php
$str = '12345678';

$numPairsArray = str_split($str, 2);
?>

<h1>Source string: <?php echo $str; ?></h1>
<h1><?php echo join('+', $numPairsArray) . " = " . array_sum($numPairsArray); ?></h1>