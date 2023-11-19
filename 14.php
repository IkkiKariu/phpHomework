<?php

function func ($numString) 
{
    $numString = trim($numString);

    $resultString = "";
    $numArray = explode(" ", $numString);

    foreach ($numArray as $num) 
    {
        $tmpMultiplication = 1;

        for ($i = 0; $i < count($numArray); $i++) {
            if ($num != $numArray[$i])
            {
                $tmpMultiplication *= $numArray[$i];
            }
        }
        $resultString .= $tmpMultiplication . " ";
    }
    $resultString = trim($resultString);

    return $resultString;
}

$sourceString = " 1 2 3 4 5 6 "
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Result string: <?php echo func($sourceString); ?></h1>