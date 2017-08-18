<?php
include_once "allSet.php";
if (isset($_POST['action']) && $_POST['action']=="reg") {
    saveUser(["name"=>$_POST['userName'], "pass"=>password_hash($_POST['userPass'],1)]);

    $_SESSION['user_name'] = $_POST['userName'];
    header("Location: index.php");
}



include_once "parts/header.php";

include_once "parts/registration.php";


include_once "parts/footer.php";