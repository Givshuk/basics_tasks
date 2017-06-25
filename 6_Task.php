<?php

$element = 5;


$array = [];
for ($i = 0; $i < 10; $i++) {


    $array[$i] = rand(-5, 5);
    echo $array[$i] . ' ';
    echo "<br />";

}

if (in_array($element, $array)) {
    echo "Елемент найден";

} else {
    echo "Не найден";
}