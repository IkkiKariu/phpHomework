<?php 
    if (session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();

        $_SESSION['visited_pages'] = array();
        $_SESSION['user_data'] = array();
    }
?>
<?php 
    if (key_exists('firstName', $_POST))
    {
        $_SESSION['user_data']['first_name'] = $_POST['firstName'];
    } 
?>

<?php $_SESSION['visited_pages'][] = $_SERVER['REQUEST_URI']; ?>

<?php var_dump($_SESSION['visited_pages']); ?>

<form action="/88/ageForm.php" method="POST">
    <label>Фамилия: </label><input type="text" name="lastName"/>
    <input type="submit" value="Отправить"/>
</form>    