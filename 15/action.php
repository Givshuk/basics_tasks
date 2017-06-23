<?php
include '15.html';// если закоментить отбражает на новой странице
$operator = $_GET ['operator'];
$a = $_GET ['a'];
$b = $_GET ['b'];

//var_dump($_GET);

if ($b == 0 and $operator == '/') {
    echo "Деление на ноль";
} else {
    if ($operator == '+') {
        $result = $a + $b;
    }
    if ($operator == '-') {
        $result = $a - $b;
    }
    if ($operator == '/') {
        $result = $a / $b;
    }
    if ($operator == '*') {
        $result = $a * $b;
    }
    if ($operator == '%') {
        $result = $a % $b;
    }
    echo $a . $operator . $b . '=' . $result;
}
