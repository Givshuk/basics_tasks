<?php

include_once "allSet.php";






include_once "parts/header.php";

if (empty($_SESSION['basket'])){

        $items = [];
    }
else {
    $ids = $_SESSION['basket'];
    var_dump($ids);
    $resultArray = array_filter(getGoods(), function ($data) use ($ids) {


        return in_array($data['id'], $ids);
    });

    $items = $resultArray;
}
include_once "parts/categoryList.php";


include_once "parts/footer.php";