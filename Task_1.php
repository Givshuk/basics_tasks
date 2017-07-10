<?php

function max_element($array){

    if(is_array($array)&&isset($array)) {
        echo max($array);

    }
    else{
        echo "Передан не верный параметр";
    }
}


$array = [1,2,3];

max_element($array);





