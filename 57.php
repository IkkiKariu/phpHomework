<?php
$array = [];

for ($i = 1; $i <= 10; $i++)
{
    $array[$i-1] = $i;
}
?>

<h1><?php print_r($array); ?></h1>