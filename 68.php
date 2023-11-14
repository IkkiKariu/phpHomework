<?php
$string = "ABCDEFGH";
?>

<?php if (strlen($string) > 5): ?>
    <h1><?php echo substr($string, 0, 5) . "..."; ?></h1>
<?php else: ?>
    <h1><?php echo $string; ?></h1>
<?php endif; ?>
