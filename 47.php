<?php

function iterateArray($arr) {
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            iterateArray($value);
        } else {
            echo '<h3>Key: ' . $key . '    Value: ' . $value . '</h3>';
        }
    }
}


$array = array( array( 1, 2, 3, ), array( array(4, 5, array(6, 7, 7)), 9, 10, ), );

iterateArray($array);
?>
