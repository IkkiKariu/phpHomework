<?php
$day = 22;

if ($day >= 1 && $day <= 10) {
    $decade = 'first';
}else if ($day >= 11 && $day <= 20) {
    $decade = 'second';
}else if ($day >= 21 && $day <= 31) {
    $decade = 'third';
}else {
    echo "<h1>invalid value of \'$day\' variable!</h1>";
}
?>

<h1>Day: <?php echo $day; ?></h1>

<?php if (isset($decade)): ?>
    <h1>Decade: <?php echo $decade; ?></h1>
<?php endif; ?>
