<?php

$car = [['id' => 1, 'model' => 'Tesla S', 'price' => 100],
    ['id' => 2, 'model' => 'Tesla X', 'price' => 100000],
    ['id' => 3, 'model' => 'Tesla Z', 'price' => 100000],


];

function array_implode($glue, $separator, $array,$res)
{
    if (!is_array($array)) return $array;
    $string = array();
    foreach ($array as $key => $val) {
        if (is_array($val))
            $val = implode(',', $val);
        $string[] = "{$key}{$glue}{$val}";

    }
    return  implode($separator, $string);

}

function print_array($array, $boolean = false)
{
    if ($boolean == true) {
        echo array_implode('=>', ',', $array);
    } else {
        foreach ($array as $key => $value) {

            echo " [$key] => " . $value . "\n\n";
            if (is_array($value)) {


                print_array($value);

            }
        }

    }
    return true;
}


print_array($car);