<?php
function replaceBlock(string $forReplace, int $blockIndex, string $replaceBy): string
{
    $blocksArr = explode('/', $forReplace);
    $blocksArr[$blockIndex+1] = $replaceBy;
    return join('/', $blocksArr);
}
$blockNumberForReplacement = 2;
$stringReplaceBy = "!";

$string = '/aaa/222/we33/qqq/';
?>

<h1>Source: <?php echo $string; ?></h1>
<h1><?php echo "Replace block with index {$blockNumberForReplacement} by \"{$stringReplaceBy}\" string"?></h1>
<h1>Result: <?php echo replaceBlock($string, $blockNumberForReplacement, $stringReplaceBy); ?></h1>