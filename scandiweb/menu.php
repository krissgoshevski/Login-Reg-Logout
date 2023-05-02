<?php
require_once __DIR__ . "/consts.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles/main.css">

</head>
<body>
<header class="menu">
<h1><a href="<?= URL_APP . "/createproduct.php"?>">Scandiweb</a></h1>
<ul class="nav">
    <li><a href="<?= URL_APP . "/createproduct.php"?>">Add new product  </a></li>
    <li><a href="<?= URL_APP . "/newlist.php"?>">View all products </a></li>
    <li><a href="<?= URL_APP . "/createcategory.php"?>">Add new category </a></li>
</ul>
</header>
</body>
</html>




















<?php 
// <a href="<?= URL_APP . "/auth/index.php" ? >"> Sign in </a>
 
/**
 * <?= $loggedIn ? "<a href='" . URL_APP . "/indexlist.php'> View all products || </a>" : '' ?> 
 * 
<?= $loggedIn ? "<a href='" . URL_APP . "/brands/create.php'> Add new brand || </a>" : '' ?> 
<?= $loggedIn ? "<a href='" . URL_APP . "/brands/indexlist.php'> View all brands </a>" : '' ?> 

<?= $loggedIn ? "<span>Welcome {$_SESSION['username']}</span>" : '' ?>

<?= $loggedIn ? "<a href='" . URL_APP . "/auth/logout.php' class='logout'> Logout </a>" : '' ?> 
 * 
 */

?>
