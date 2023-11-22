<?php
$sourceString = '12345 67890';
$numberPairsArray = explode(' ', $sourceString);
$reversedNumberPairsArray = array_map('strrev', $numberPairsArray);
$resultString = join(' ', $reversedNumberPairsArray);
?>
<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Result string: <?php echo $resultString; ?></h1>
