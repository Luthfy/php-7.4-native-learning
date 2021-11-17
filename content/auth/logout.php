<?php 

session_start();

$_SESSION = [];
session_unset();
session_destroy();

header("Location: http://".$_SERVER['HTTP_HOST']."/webproject/login.php");
exit;