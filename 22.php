<?php
$x = 2;
$y = 6;
$z = 9;

$result = ($x + 1) * 4 - 2 * ($z - 2 * $x**2 + $y**2);
?>

<h1>Variables: x = 2, y = 6, z = 9</h1>
<h1>Expression: (x+1)4−2(z−2x^2+y^2)</h1>
<h1>Result: <?php echo $result; ?></h1>