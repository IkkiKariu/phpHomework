<?php
$AsciiLettersIntervals = [[65, 90], [97, 122]];
$randArrElemIndex = rand(0, 1);

$letter = chr(rand($AsciiLettersIntervals[$randArrElemIndex][0], $AsciiLettersIntervals[$randArrElemIndex][1]));
?>

<h1><?php echo $letter; ?></h1>
<h1><?php echo (ctype_upper($letter) ? 'Большая' : 'Маленькая') ?></h1>;