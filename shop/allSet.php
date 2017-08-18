<?php
session_start();

function getMenuItems($file)
{
    $menu = unserialize(file_get_contents($file));
    $max =end($menu);
    $id = $max['id'];//записать в сесию
    $_SESSION['id'] = $id;
    if (!is_array($menu) || empty($menu)) {
        $menu = [];
    }
    return $menu;

}
function getTovar()
{
    $data = unserialize(file_get_contents('tovar.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

/**
 * @return array
 */
function getGoods()
{

    $tovar = unserialize(file_get_contents('tovar.txt'));
    $max =end($tovar);
    $id = $max['id'];//записать в сесию
    $_SESSION['idtovara'] = $id;
    if (!is_array($tovar) || empty($tovar)) {
        $tovar = [];
    }
    return $tovar;
}

/**
 * @param int $category
 * @return array
 */
function getGoodsByCategory( $category)
{
    return array_filter(getGoods(), function ($i) use ($category) {
        return $i['category'] == $category;

    });
}




/**
 * @return array
 */
function getUsers()
{
    $data = unserialize(file_get_contents('user.txt'));

    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function saveUser(array $user)
{
    $users = getUsers();
    array_push($users, $user);
    file_put_contents('user.txt', serialize($users));
}
function saveMenu(array $menu)
{
    $menus = getMenuItems('menu.txt');

    array_push($menus, $menu);
    file_put_contents('menu.txt', serialize($menus));


}
function saveTovar(array $tovar)
{
    $tovars = getTovar();
    array_push($tovars, $tovar);
    file_put_contents('tovar.txt', serialize($tovars));
}

function isAuth()
{
    return isset($_SESSION['user_name']);
}

function placeToBasket($goodsId)
{
    if (!isset($_SESSION['basket'])) $_SESSION['basket'] = [];
    array_push($_SESSION['basket'], $goodsId);
}

function getBasketCounter()
{
    return count($_SESSION['basket']);
}
