<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];

$sum  = 0;

foreach ($arr as $_ => $number) {
    $sum += $number;
}
?>

<h2><?php print_r($arr); ?></h2>
<hr/>
<h1>Sum: <?php echo $sum; ?></h1>