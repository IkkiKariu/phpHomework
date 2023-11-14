<?php
$array = [];

for ($i = 0; $i < 10; $i++)
{
    $array[$i] = 10 - $i;
}
?>

<h1><?php print_r($array); ?></h1>