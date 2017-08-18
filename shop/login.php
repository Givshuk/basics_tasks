<?php

include_once "allSet.php";


if(!empty($_POST['userName'] && $_POST['userPass'])) {
//Ищем
    $needle = $_POST['userName'];
    $allUser = getUsers();
   // var_dump($allUser);
//Собственно поиск
    $result = array_filter($allUser, function($innerArray){
        global $needle;
        //return in_array($needle, $innerArray);    //Поиск по всему массиву
         return ($innerArray['name'] == $needle); //Поиск по первому значению
    });

//Результат
    ///echo '<pre>'.print_r($result, true).'</pre>';

  if(!empty($result)) {
       $key = (array_keys($result));
       $key = $key[0];
      // var_dump($key);
      //var_dump($result[3]["pass"]);
     //var_dump( var_dump(password_verify($_POST['userPass'], $result[$key]['pass'])));
      if(password_verify($_POST['userPass'], $result[$key]['pass'])) {
              $_SESSION['user_name'] = $_POST['userName'];
          header("Location: index.php");
      }
  }




}
else{

    //echo "user not found";
}
//var_dump($result);

include_once "parts/header.php";
include_once "parts/menu.php";
include_once "parts/login.php";
include_once "parts/footer.php";