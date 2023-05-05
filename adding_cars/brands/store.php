<?php 

require_once __DIR__ . "/../autoland.php";
$brandname = $_POST['brand'];
$sqliud = "INSERT INTO brands (name) VALUES(:name)";

$statement = $pdoconn->prepare($sqliud); // za da ne dozvolime SQL injection

$data = ['name' => $brandname]; 

if($statement->execute($data)) // za da ne dozvolime SQL injection
{
    header("Location: indexlist.php?status=success");
    die();
}

header("Location: index.php?status=error");
    die();

?>