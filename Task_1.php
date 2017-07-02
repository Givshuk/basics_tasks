<?php
$arr = [];
for ($i = 0; $i < 1000; $i++) {
    $arr[$i] = NULL;


}
print_r($arr);
print_r(array_chunk($arr, 100));