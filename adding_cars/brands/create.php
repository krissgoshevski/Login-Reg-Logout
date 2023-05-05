<?php 
require_once __DIR__ . "/../autoland.php";

$sqlbrands = "SELECT * FROM brands";
$statement = $pdoconn->query($sqlbrands); // oti nemam parametri samo so query 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/create.css">
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/menu.css">
</head>
<body>

<?php require_once __DIR__ . "/../menu.php"; ?>

<div class="formone"> 
    <form method="POST" action="store.php">

    <label for="brand">Brand name</label>
    <input type="text" name="brand" id="brand"/> <br> <br>
    <button class="btnbrand">Add brand</button>

    </form>
    </div>
</body>
</html>