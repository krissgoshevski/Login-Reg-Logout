<?php 
 //error_reporting(0);
 require_once __DIR__ . "/../autoland.php";

$id_decrypt = decrypt($_GET['id']);

$sqls = "SELECT * FROM brands WHERE id =:id";
$statement = $pdoconn->prepare($sqls);
$statement->execute(['id' => $id_decrypt]);


if($statement->rowCount() == 0){
    header("Location: indexlist.php");
    die();
} 
$brand = $statement->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/create.css">
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/menu.css">
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/edit.css">
</head>
<body>
<?php require_once __DIR__ . "/../menu.php";?>
<div class="formone"> 
    <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= encrypt($brand['id'])?>"> 
    <!-- morai  id-to vaka da se zema so hidden za da se napravi updte vo baza vo update.php -->
    <label for="name">Name</label>                       
    <input type="text" name="name" id="name" value="<?= $brand['name'] ?>"/>
    <br> <br>
    <button class="btnupdate">Update brand</button>
    </form>
    </div>
</body>
</html>

