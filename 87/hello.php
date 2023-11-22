<?php if (key_exists('user_name', $_COOKIE)): ?>
    <h1>Привет, <?php echo $_COOKIE['user_name']; ?></h1>
<?php endif; ?>