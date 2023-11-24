<?php
$text = 'Мама мыла раму!';
?>

<h1><?php echo mb_substr($text, 8, 1); ?></h1>
<h1><?php echo mb_substr($text, 13, 1); ?></h1>
<h1><?php echo mb_substr($text, 6, 1); ?></h1>
<h1><?php echo mb_substr($text, 0, 1); ?></h1>
<h1><?php echo substr($text, -1); ?></h1>