<?php
// скрипт работает только для положительных чисел

$sourceStr = '13945 60879';

$numberPairs = explode(' ', $sourceStr);
$numberSequenceArray = [];
$numberSequenceArray[0] = str_split($numberPairs[0]);
$numberSequenceArray[1] = str_split($numberPairs[1]);

rsort($numberSequenceArray[0]);
rsort($numberSequenceArray[1]);

if ($numberSequenceArray[1][count($numberSequenceArray[1]) - 1] == 0)
{
    $tmp = $numberSequenceArray[1][0];
    $numberSequenceArray[1][0] = $numberSequenceArray[1][count($numberSequenceArray[1]) - 1];
    $numberSequenceArray[1][count($numberSequenceArray[1]) - 1] = $tmp;

    $tmpArray = array_slice($numberSequenceArray[1], 1);
    rsort($tmpArray);
    
    $numberSequenceArray[1] = array_merge(array_slice($numberSequenceArray[1], 0, 1), $tmpArray);
}

$numberPairs[0] = join('', $numberSequenceArray[0]);
$numberPairs[1] = join('', $numberSequenceArray[1]);

echo join(' ', $numberPairs);
?>