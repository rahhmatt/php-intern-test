<?php

$column = 7;

for ($i = 0; $i < $column; $i++) {
    for ($j = 0; $j < $column; $j++) {
        if($i == $j || $i + $j == $column - 1){
            echo "x";
        } else {
            echo "o";
        }

    }
    echo PHP_EOL;
}


?>