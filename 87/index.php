<form action="/87/index.php" method="POST">
    <label>Ваше имя: </label><input type="text" name="userName"/>
    <input type="submit" value="Представиться"/>
</form>

<?php if(key_exists('userName', $_POST) && strlen($_POST['userName']) > 0): ?>
    <?php setcookie('user_name', $_POST['userName']); ?>
<?php endif; ?>
