<?php
$str = 'abc abc abc';

$bPos = strpos($str, 'b');


echo "<h2>String: {$str}</h2>";
echo str_contains($str, 'b') ? "Position (index) of the first 'b' occurrence: {$bPos}" : "The string hasn't 'b' char";
?>