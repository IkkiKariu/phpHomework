<?php
$str = "bcaacbacbacbbbaacccccc";
$str2 = "bcaacbacbacbbbaacccccc";


echo "<h1>Source string: {$str}</h1>";

echo "<h1>Result</h1>";
echo "<h1>" . strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]) . "</h1>";

$str2 = strtr($str2, 'a', 1);
$str2 = strtr($str2, 'b', 2);
$str2 = strtr($str2, 'c', 3);

echo "<h1>" . $str2 . "</h1>";
?>

