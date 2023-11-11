<?php
$arr = [];

for ($i = 1; $i <= 5; $i++)
{
    $arr[$i-1] = $i;
}
?>

<h1><?php print_r($arr); ?></h1>