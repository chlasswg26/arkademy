<?php
function createMatrix($length) {
    $arr = array();
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            $arr[$i][$j] = $i * $length + $j + 1;
        }
    }

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            echo $arr[$i][$j] . '';
        }
        echo '<br />';
    }

    $left = 0;
    $right = 0;

    for ($i = 0, $j = $length; $i < $length; $i++, $j--) {
        $left += $arr[$i][$i];
        $right += $arr[$i][$j - 1];
    }

    echo 'Total: ' . $left * $right;
}

echo createMatrix(3);