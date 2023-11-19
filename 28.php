<form action="28.php" method="post">
    <div><input type="number" placeholder="Age" name="age"/></div>
    <div><input type="submit" value="SEND"></div>
</form>

<?php if (key_exists('age', $_POST)):?>
    <?php if (intval($_POST['age']) > 80): ?>
        <h2>Здравствуйте, уважаемый</h2>
    <?php else: ?>
        <h2>Успехов!</h2>
    <?php endif; ?>
<?php endif; ?>
