<?php

function reverseWordsInString(string $str) {
    $words = explode(' ', $str);
    
    for($i = 0; $i < count($words) / 2; $i++){
        $tmp = $words[$i];
        $words[$i] = $words[count($words) - 1 - $i];
        $words[count($words) - 1 - $i] = $tmp;
    }

    return join(' ', $words);
}
?>

<h1><?php echo reverseWordsInString("hello world") ?></h1>