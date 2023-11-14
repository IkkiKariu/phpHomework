<?php
$string = "http://docs.google.com";
?>

<?php if (str_starts_with($string, "http://")): ?>
    <h1>да</h1>
<?php else: ?>
    <h1>нет</h1>
<?php endif; ?>