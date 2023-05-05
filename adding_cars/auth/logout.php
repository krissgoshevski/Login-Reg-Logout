<?php 
require_once __DIR__ . "/../menu.php";
require_once __DIR__ . "/../autoland.php";

//session_start(); ja imame vo autoland i zatoa ovde ne mi treba pak da ja deklariram 
session_destroy();


header("Location: " . APP_URL . "/cars/indexlist.php");

?>