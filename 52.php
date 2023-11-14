<?php
$string = 'aaef';

echo "<h1>Строка: {$string}</h1>";
echo "<h1>Является ли её первый символ символом 'a'?</h1>";
?>

<h1><?php echo $string[0] == 'a' ? 'Да' : 'Нет'; ?></h1>
<?php echo "<h1>Её первый символ: '{$string[0]}'</h1>";?>