<?php
$day = 6;

switch ($day) {

    case $day > 1 and $day < 5:
        echo "Рабочий день";
        break;
    case $day > 5 and $day < 7:
        echo "Выходной день ";
        break;
    default:
        echo "Неизвестный день";

}