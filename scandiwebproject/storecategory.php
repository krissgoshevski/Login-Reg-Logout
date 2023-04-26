<?php 
  require_once __DIR__ . "/classes/conndb.php";
  require_once __DIR__ . "/classes/insertval.php";

  
  use MyConn\Conndb;
  use MyVlInsert\InsertValidate;

  $conn = new Conndb();
  $conn = $conn->connect();

  $insval = new InsertValidate($conn);
  $categoryname = $_POST['category'];
  $insval->checkRequestMethod();


  if($cd->insertCategory($categoryname)){
    header("Location: newlist.php?status=succesfullycreatedcategory"); die();
  }
 
    header("Location: newlist.php?status=error");
    die();


?>