<?php
function factorize($number) {
    $factors = array();
    $divisor = 2;

    while ($number > 1) {
        if ($number % $divisor == 0) {
            $factors[] = $divisor;
            $number /= $divisor;
        } else {
            $divisor++;
        }
    }
    return $factors;
}


$number = 12;
$result = factorize($number);
?>

<h1>Source number: <?php echo $number; ?></h1>
<h1>Простые делители:

<?php foreach ($result as $factor): ?> 
    <?php echo "$factor "; ?> 
<?php endforeach; ?>

</h1>