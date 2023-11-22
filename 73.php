<?php
$numbersArr = [1, 2, 3, 4, 5];

$result = 0;

foreach ($numbersArr as $value)
{
    $result += $value;
}
?>

<h2><?php print_r($numbersArr); ?></h2>
<h2>$result =  <?php echo $result; ?></h2>