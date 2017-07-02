<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/*for ($i=0;$i<10;$i++){

    if($arr[$i]==10){
        echo 'Последний елемент '.end($arr);
        break;
    }

    echo $arr[$i];



}

*/
foreach ($arr as $value) {

    echo $value;
    if ($value == (count($arr) - 1)) {
        echo 'Последний елемент = ';
    }

}

