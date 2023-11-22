<?php
//Дан массив с числами. Посчитайте суммарное количество цифр 3 в этих числах.

$counter = 0;
$array = [1, 181, 15, 3437, 13];
?>
<h1>Исходный массив: <?php echo join(' ', $array); ?></h1> 
<h1>
    <?php 
        foreach ($array as $number)
        {
            if (str_contains((string)$number, '3'))
            {
                $counter++;
            }
        }

        echo "<h1>Количество троек: {$counter}</h1>"; 
    ?>
</h1>