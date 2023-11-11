<?php
function getElementFromArray($arr, $keys) {
    $keys = explode('.', $keys);
    $result = $arr;
    foreach ($keys as $key) {
        if (isset($result[$key])) {
            $result = $result[$key];
        } else {
            return null; // или можно выбросить исключение
        }
    }
    return $result;
}

// Пример использования
$arr = [
    'строка1' => [
        'строка2' => [
            'строка3' => 'Значение'
        ]
    ]
];

echo getElementFromArray($arr, 'строка1.строка2.строка3');
?>