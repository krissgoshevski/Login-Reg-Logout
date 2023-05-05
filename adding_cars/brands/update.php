<?php 
require_once __DIR__ . "/../autoland.php";


$sqlu = "UPDATE brands SET name = :name WHERE brands.id = :id";

$statement = $pdoconn->prepare($sqlu);

$statement->execute([
    'id' => decrypt($_POST['id']),
    'name' => $_POST['name']]); // $_POST['name'] e od edit.php failot znaci go izmam od tamu name
    // i update se pravi vo baza na 'name' => ass array 

header("Location: indexlist.php");
die();

?>