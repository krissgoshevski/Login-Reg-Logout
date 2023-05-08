<?php 

require_once __DIR__ . "/conndb.php";


    session_start();
    session_destroy();
    header("Location: loginreg.php?status=sucesfullyLogOut");

?>