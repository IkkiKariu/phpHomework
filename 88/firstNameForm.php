<?php 
    if (session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();

        $_SESSION['visited_pages'] = array();
        $_SESSION['user_data'] = array();
    }
?>

<?php $_SESSION['visited_pages'][] = $_SERVER['REQUEST_URI']; ?>

<?php var_dump($_SESSION['visited_pages']); ?>

<form action="/88/lastNameForm.php" method="POST">
    <label>Имя: </label><input type="text" name="firstName"/>
    <input type="submit" value="Отправить"/>
</form>