<?php
function secondsInHours(int $hours) {
    return $hours * 60 * 60;
}

function secondsInDays(int $days) {
    return $days * 24 * 60 * 60; 
}

function secondsInMonth(int $daysInMonth) {
    if (29 <= $daysInMonth && $daysInMonth <= 31){
        return $daysInMonth * 24 * 60 * 60;
    }
    return "Wait... Passed argument is invalid: There cannot be \"" . $daysInMonth . "\" " . "days in month!";
}

$hours = 4;
$days = 12;
$daysInMonth = 31;
?>

<h1>Seconds in <?php echo $hours . " hours: " . secondsInHours($hours)?></h1>

<h1>Seconds in <?php echo $days . " days: " . secondsInDays($days)?></h1>

<h1>Seconds in <?php echo " month which consists of ". $daysInMonth . " days: " . secondsInMonth($daysInMonth)?></h1>