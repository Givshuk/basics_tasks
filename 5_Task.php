<?php
$array = [];
for ($i = 0; $i < 10; $i++) {


    $array[$i] = rand(-5, 20);
    echo $array[$i] . ' ';
    echo "<br />";

}

echo "<br/>";
$exit = false;


while (!$exit) {

    $exit = true;
    for ($i = 0; $i < count($array) - 1; $i++) {


        if ($array[$i] > $array[$i + 1]) {

            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
            $exit = false;
        }


    }
}

echo "<br />";
for ($i = 0; $i < 10; $i++) {


    echo $array[$i] . ' ';
    echo "<br />";


}




