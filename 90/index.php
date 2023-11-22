<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><a href="/90/view.php">База данных</a> <a href="/90/index.php">Добавить данные</a></header>
    <hr/>
    <h1>Учётные сведения об учахихся</h1>

    <form action="view.php" method="post">
        <div><label>Фамилия:         </label><input type="text" name="lastName"/></div>
        <div><label>Класс:           </label><input type="number" name="class"/></div>
        <div><label>Год поступления: </label><input type="number" name="yearOfAdmission"/></div>
        <div><label>Поручение:       </label><input type="text" name="instructions"/></div>
        <div><input type="submit" value="Добавить"/></div>
    </form>
</body>
</html>