<?php

/* source
$text = 'Я';

$text = $text . ' хочу';
$text = $text . ' знать';
$text = $text . ' PHP!';
*/


//reformed
$text = 'Я';

$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';

?>

<h1><?php echo $text; ?></h1>
