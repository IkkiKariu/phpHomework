<?php
$str = 'asd  .a.   a.  a..  2134. .';
$contains  = str_contains($str, '..');

echo "<h2>String: {$str}</h2>";
echo "<h2>" . ($contains ? 'есть' : 'нет') . "</h2>";
?>
