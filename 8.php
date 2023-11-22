<?php
$game = 'Путешественник';

echo "<h1>" . mb_substr($game, 8, 1) . mb_substr($game, 5, 1) . mb_substr($game, 6, 1) . mb_substr($game, 10, 1) . mb_substr($game, 1, 1) . mb_substr($game, 4, 1) . mb_substr($game, 13, 1) . mb_substr($game, 12, 1) . "</h1>";

echo "<h1>" . mb_substr($game, 6, 1 ) . mb_substr($game, 2, 2 ) . mb_substr($game, 11, 1 ) . mb_substr($game, 13, 1 ) . mb_substr($game, 12, 1 ) . "</h1>";

echo "<h1>" . mb_substr($game, 8, 2 ) . mb_substr($game, 6, 2 ) . mb_substr($game, 11, 3 ) . "<h1>";

echo "<h1>" . mb_substr($game, 1, 1 ) . mb_substr($game, 2, 1 ) . mb_substr($game, 3, 1 ) . mb_substr($game, 4, 1 ) . mb_substr($game, 5, 1 ) . mb_substr($game, 11, 1 ) . mb_substr($game, 12, 1 ) . mb_substr($game, 3, 1 ) ."</h1>";

?>