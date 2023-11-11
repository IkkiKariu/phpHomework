<?php

function func ($numString) 
{
    $numString = trim($numString);

    $resultString = "";
    $numArray = explode(" ", $numString);

    foreach ($numArray as $num) 
    {
        $tmpCount = 0;

        for ($i = 0; $i < count($numArray); $i++) {
            if ($num != $numArray[$i])
            {
                $tmpCount += $numArray[$i];
            }
        }
        $resultString .= $tmpCount . " ";
    }
    $resultString = trim($resultString);

    return $resultString;
}

$sourceString = " 1 2 3 4 5 6 "
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Result string: <?php echo func($sourceString); ?></h1>