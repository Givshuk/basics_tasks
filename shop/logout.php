<?php
session_start();
unset($_SESSION);
setcookie('PHPSESSID',"",time()-3600);
setcookie('hash',"",time()-3600);
session_destroy();
header("Location: index.php");
?>