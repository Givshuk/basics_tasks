<?php
session_start();
include_once "allSet.php";
if (isset($_POST['name']))  {
    saveMenu(["name"=>$_POST['name'],"id"=>$_SESSION['id']+1]);
    header("Location: index.php");
}
if(isset($_POST['nametovar'])&&($_POST['descriptiontovar'])){
       saveTovar(["name"=>$_POST['nametovar'],"description"=>$_POST['descriptiontovar'],"id"=>$_SESSION['idtovara']+1,"category"=>$_POST['cat']]);
    header("Location: index.php");
}
include_once "parts/header.php";

include_once "parts/adminstayle.php";

include_once "parts/footer.php";





