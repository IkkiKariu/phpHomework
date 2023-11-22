<?php
function insertArray($nesting, $something): array
{
    if ($nesting <= 0)
    {
        return [$something];
    }
    return [insertArray($nesting - 1, $something)];
}
$arr = [];
$counter = 0;
$nesting = 7;

while ($counter <= $nesting)
{
    if ($counter <= 0)
    {
        $arr[0] = 1;
    } else {
        $arr[$counter] = insertArray($counter - 2, $counter);
    }
    $counter = $counter + 1;
}
unset($arr[1]);
?>

<h1><?php echo json_encode(array_values($arr)) ?></h1>