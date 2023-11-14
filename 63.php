<?php
$password = "43BGDg";
?>

<h1>Количество символов в пароле дожно быть больше 5, но меньше 10</h1>

<h1>$password = <?php echo $password; ?></h1>

<?php if ( strlen($password) > 5 && strlen($password) < 10): ?>
    <h1>Пароль соответствует требованиям</h1>
<?php else: ?>
    <h1>Пароль не соответствует требованиям</h1>
<?php endif; ?>