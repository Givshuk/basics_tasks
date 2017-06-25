<?php


$matrix = [[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]];


$matrix2 = [[1, 1, 1],
    [1, 1, 1],
    [1, 1, 1]];


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {


        $matrix2[$i][$j] += $matrix[$i][$j];

        echo $matrix2[$i][$j] . ' ';


    }
    echo "<br/ >";
}
