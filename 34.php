<?php
$array = [1, '', 2, '', 3];
?>

<h1>Source: <?php print_r($array); ?></h1>

<?php
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == '') {
        unset($array[$i]);
    }
}
?>

<h1>Result: <?php print_r($array); ?></h1>