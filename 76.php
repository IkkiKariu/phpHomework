<?php
$str = '';
$len = 6;

for ($i = 0; $i < $len; $i++)
{
    $str .= chr(rand(97, 122));
}
?>

<h1>$len = <?php echo $len; ?></h1>
<h1>$str = <?php echo $str; ?></h1>