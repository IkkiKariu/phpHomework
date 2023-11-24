<?php 
    session_start();
    array_push($_SESSION['visited_pages'], $_SERVER['REQUEST_URI']);
?>
<form action="/88/ageForm.php" method="POST">
    <label>Last name: </label><input type="text" name="lastName"/>
    <input type="submit" value="Send"/>
</form>

<?php
    $_SESSION['firstName'] = $_POST['firstName'];
?>
