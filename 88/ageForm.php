<?php 
    if (session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();

        $_SESSION['visited_pages'] = array();
        $_SESSION['user_data'] = array();
    }
?>

<?php 
    if (key_exists('lastName', $_POST))
    {
        $_SESSION['user_data']['last_name'] = $_POST['lastName'];
    } 
?>
<?php var_dump($_SESSION['visited_pages']); ?>

<?php $_SESSION['visited_pages'][] = $_SERVER['REQUEST_URI']; ?>

<?php var_dump($_SESSION['visited_pages']); ?>

<form action="/88/showData.php" method="POST">
    <label>Возраст: </label><input type="text" name="age"/>
    <input type="submit" value="Отправить"/>
</form>