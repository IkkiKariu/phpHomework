<?php
$str = 'var_test_text';

function SnakeCaseToCamelCase (string $text) : string
{
    $wordsArray = explode('_', $text);

    for ($i = 0; $i < count($wordsArray); $i++)
    {
        if ($i == 0)
        {
            $wordsArray[$i] = lcfirst($wordsArray[$i]);
            continue;
        }

        $wordsArray[$i] = ucfirst($wordsArray[$i]);
    }

    return  join('', $wordsArray);
}

$result = SnakeCaseToCamelCase($str);

echo $result;
?>