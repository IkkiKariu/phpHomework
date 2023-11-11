<?php
$sourceString = "13217";

$sum = 0;

foreach(str_split($sourceString) as $num) {
    $sum += $num;
}
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Sum: <?php echo $sum; ?></h1>
