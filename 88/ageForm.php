<?php 
    session_start();
    array_push($_SESSION['visited_pages'], $_SERVER['REQUEST_URI']);
?>
<form action="/88/userData.php" method="POST">
    <label>Age: </label><input type="text" name="age"/>
    <input type="submit" value="Send"/>
</form>

<?php
    $_SESSION['lastName'] = $_POST['lastName'];
?>
