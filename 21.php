<?php
$numbers = [3, 5, 8];

$average = 0;

foreach ($numbers as $number) {
    $average += $number;
}

$average /= count($numbers);
?>


<h1>Numbers: 3, 5, 8</h1>
<h1>Average: <?php echo $average; ?></h1>
