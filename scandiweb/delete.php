<?php 
require_once 'classes/conndb.php';
require_once __DIR__ . "/classes/cd.php";
require_once __DIR__ . "/classes/insertval.php";

use MyConn\Conndb;
use MyVlInsert\InsertValidate;

$conn = new Conndb();
$conn = $conn->connect();

if(isset($_POST['ADD'])){
    header("Location: createproduct.php");
    exit();
} else {
    if(isset($_POST['delete-checkbox'])) {
        $productIds = $_POST['delete-checkbox'];
        $insval = new InsertValidate($conn);
        $insval->deleteProducts($productIds);
    }
}
header("Location: newlist.php");
exit();


?>