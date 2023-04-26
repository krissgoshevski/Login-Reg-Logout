<?php 
require_once 'classes/conndb.php';
require_once __DIR__ . "/classes/cd.php";
require_once __DIR__ . "/classes/insertval.php";

use MyConn\Conndb;
use MyVlInsert\InsertValidate;

$conn = new Conndb();
$conn = $conn->connect();
if(isset($_POST['addbtn'])){
    $add = $_POST['addbtn'];
}

$productIds = $_POST['product_ids'];
$insval = new InsertValidate($conn);
$insval->checkRequestMethod();

if(isset($add)){
        header("Location: createproduct.php"); die();
    } else {
        $insval->deleteProducts($productIds);
}


header("Location: newlist.php");
die();

?>