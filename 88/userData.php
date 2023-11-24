<?php 
    session_start();
    array_push($_SESSION['visited_pages'], $_SERVER['REQUEST_URI']);
?>

<?php
    $_SESSION['age'] = $_POST['age'];
?>

<h1>USER DATA</h1>

<h2>Name: <?php echo $_SESSION['firstName']; ?></h2>
<h2>Last name: <?php echo $_SESSION['lastName']; ?></h2>
<h2>Age: <?php echo $_SESSION['age']; ?></h2>

<hr/>

<h1>VISITED PAGES</h1>

<?php foreach ($_SESSION['visited_pages'] as $sequenceNum => $resource): ?>
    <h2><?php echo "{$sequenceNum}. {$resource}"; ?></h2>
<?php endforeach; ?>
