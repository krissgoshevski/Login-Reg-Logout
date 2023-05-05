<?php 
require_once __DIR__ . "/constsdb.php";
require_once __DIR__ . "/autoland.php";

$loggedIn = isset($_SESSION['username']); // ako e setiran username-ot t.e. ako e najaven korisnikot 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="cssfiles/menu.css"> 
</head>
<body>
<div class="menu">
<?= $loggedIn ? "<a href='" . APP_URL . "/cars/create.php'> Add new car || </a>" : '' ?> 
<?= $loggedIn ? "<a href='" . APP_URL . "/cars/indexlist.php'> View all cars || </a>" : '' ?> 

<a href="<?= URL_ALLCARS ?>">View all cars ||</a>
<a href="<?= APP_URL . "/auth/index.php" ?>"> Sign in </a>

<?= $loggedIn ? "<a href='" . APP_URL . "/brands/create.php'> Add new brand || </a>" : '' ?> 
<?= $loggedIn ? "<a href='" . APP_URL . "/brands/indexlist.php'> View all brands </a>" : '' ?> 

<?= $loggedIn ? "<span>Welcome {$_SESSION['username']}</span>" : '' ?>

<?= $loggedIn ? "<a href='" . APP_URL . "/auth/logout.php' class='logout'> Logout </a>" : '' ?> 



</div>
</body>
</html>

<!-- < ?= $loggedIn ? "<a href='" . APP_URL . "/auth/index.php' class='signin'> Sign in </a>" : '' ?>  -->

