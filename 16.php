<?php

function findCombinations($numString) {
    $numString = trim($numString);
    $numArray = explode(" ", $numString);

    for ($i = 0; $i < count($numArray) - 1; $i++) {
        for ($j = $i + 1; $j < count($numArray); $j++) {
            echo "<h3>" . $i . " and " . $j . "<h3>";
        }
    }
}

$sourceString = " 1 2 3 4    ";
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Combinations:</h1>
<?php findCombinations($sourceString) ?>
