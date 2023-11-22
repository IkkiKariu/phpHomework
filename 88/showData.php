<?php 
    if (session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();

        $_SESSION['visited_pages'] = array();
        $_SESSION['user_data'] = array();
    }
?>

<?php 
    if (key_exists('age', $_POST))
    {
        $_SESSION['user_data']['age'] = $_POST['age'];
    } 
?>

<?php $_SESSION['visited_pages'][] = $_SERVER['REQUEST_URI']; ?>

<?php var_dump($_SESSION['visited_pages']); ?>

<?php foreach ($_SESSION['user_data'] as $userDataParameter => $value):?>
    <h1><?php echo "{$userDataParameter}: {$value}"; ?></h1>
<?php endforeach; ?>

<hr/>

<h1>Visited resources</h1>

<?php foreach ($_SESSION['visitedPages'] as $page):?>
    <h1><?php echo $page; ?></h1>
<?php endforeach; ?>
