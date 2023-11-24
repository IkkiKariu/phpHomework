<?php 
    session_start();
    
    if (!key_exists('visited_pages', $_SESSION))
    {
        $_SESSION['visited_pages'] = array();    
    }

    array_push($_SESSION['visited_pages'], $_SERVER['REQUEST_URI']);
?>

<form action="/88/lastNameForm.php" method="POST">
    <label>First name: </label><input type="text" name="firstName"/>
    <input type="submit" value="Send"/>
</form>
