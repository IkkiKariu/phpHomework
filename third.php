<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="third.php" method="get">
        <input name="cityOfResidence" type="text"/>
        <button type="submit">Send</button>
    </form>

    <hr>

    <?php if (isset($_GET["first_name"])): ?>
        <h1>First name: <?php echo $_GET["first_name"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["age"])): ?>
        <h1>Age: <?php echo $_GET["age"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["cityOfResidence"])): ?>
        <h1>City of residence: <?php echo $_GET["cityOfResidence"] ?></h1>
    <?php endif; ?>

</body>
</html>