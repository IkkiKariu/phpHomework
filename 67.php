<?php
$string = "image.png";
?>

<?php if (str_ends_with($string, ".png")): ?>
    <h1>да</h1>
<?php else: ?>
    <h1>нет</h1>
<?php endif; ?>