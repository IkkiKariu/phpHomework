<?php
echo "<h1>Read source code</h1>";

/* source
$var = 10;

$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
*/


// reformed
$var = 10;

$var += 1;
$var += 1;
$var -= 1;
