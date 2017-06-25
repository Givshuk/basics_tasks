<?php
$array = [1, 6, 7, 8, 10, 12, 12, 56, 89, -2, 5, 7, 8, 1, 2, 3];


for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {

        echo $array[$i];
        echo "<br \>";
    }

}
for ($i = 0; $i < count($array); $i++) {

    if ($i % 5 == 0 and $i != 0) {

        echo 'Каждый пятый елемент ' . $array[$i];
        echo "<br \>";

    }


}
$x = 4;

if (!($x & 1)) {
    echo "!!";
}

