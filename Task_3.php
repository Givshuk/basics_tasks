<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 10.07.17
 * Time: 11:20
 */
$car = [['id'=>1, 'model'=>'Tesla S', 'price'=>100],
    ['id'=>2, 'model'=>'Tesla X', 'price'=>100000],
    ['id'=>3, 'model'=>'Tesla X', 'price'=>100000],





];


var_dump(glub($car));


function glub2 ($array){
    static $a;


    foreach ($array as $mas){
        if(is_array($mas)){
            $a++;
            glub2($mas);


        }


    }
    return $a;




}
var_dump(glub2($car));
