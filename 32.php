<?php
$sourceArray = [43, 5, 4, 34, 84, 2, 75, 23, 55, 445, 959];

$resultArray = array();

function func ($numArray, $resArr) {
    foreach ($numArray as $number) {
        if (in_array('5', str_split(strval($number)))) {
            array_push($resArr, $number);
        }
    }
    return $resArr;
}
?>

<h1>Source: <?php print_r($sourceArray); ?></h1>
<h1>Result: <?php print_r(func($sourceArray, $resultArray)); ?></h1>
