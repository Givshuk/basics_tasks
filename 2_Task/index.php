<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 29.06.2017
];

foreach ($car as $key => $arr) {
    $price[$key]  = $arr['price'];

 * Time: 20:12
 */
$car = [['id'=>1, 'model'=>'Tesla S', 'price'=>100],
       ['id'=>2, 'model'=>'Tesla X', 'price'=>100000],


//var_dump($price);
//array_multisort($price, SORT_DESC,$car);

?>
    <table border="1">
        <tr>
            <th>Айди</th>
            <th>Модель</th>
            <th>Цена</th>

        </tr>
<?
    foreach ($car  as $value ) : ?>
    <tr>
        <td><?=$value["id"]?></td>
              <td><a href = "info.php?model=<?=$value["model"]?>"><?=$value["model"]?></a></td>
        <td><?=$value["price"]?></td>
    <tr/>
<? endforeach;
///гит зло



