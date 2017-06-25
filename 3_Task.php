<?php


$matrix = [[2, 2],
    [2, 4]];


$det = $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];

echo 'Det = ' . $det;