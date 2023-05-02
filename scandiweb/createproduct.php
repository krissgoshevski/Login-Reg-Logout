<?php
require_once __DIR__ . "/classes/myExceptions.php"; // must be included here before session_start();
use MyExceptions\RequiredName;

session_start();

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/classes/conndb.php";
require_once __DIR__ . "/classes/insertval.php";

use MyConn\Conndb;
use MyVlInsert\InsertValidate;

$conn = new Conndb();
$conn = $conn->connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page Product</title>
    <link rel="stylesheet" href="styles/main.css">
    <script type="text/javascript" src="desc.js"></script> 
</head>
<body>
    
    <?php require_once __DIR__ . "/menu.php" ?> 
    <form method="POST" action="storeproduct.php" class="createProductForm">
      <div class="formHeader">

        <h1>Add Product</h1>    
        <div class="buttonContainer">
        <button type="submit" name="save" class="save">Save</button>
        <button type="submit" name="cancel">Cancel</button>
        </div>
      </div>

    <?php   
    if(isset($_SESSION['exception'])){
      $exception = $_SESSION['exception']; 
      echo $exception->getMessage();   
      unset($_SESSION['exception']);    
   } 
   ?>
   <div class="createProductMainContainer">
    <div class="createProductMain">
      <div class="createProductMain__element">
    <label for="sku">SKU: </label>
    <input type="text" name="sku" placeholder="insert sku for product..." id="sku" class=""  />  
    </div>
    <div class="createProductMain__element">
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="insert name for product..." id="name" class=""  />  
    </div>
    <div class="createProductMain__element">
    <label for="price">Price ($): </label>
    <input type="text" name="price" placeholder="insert price for product..." id="price" class=""  />  
    </div>

    <div class="createProductMain__element">
    <label for="category_id_fk">Type Switcher: </label>
    <select name="category_id_fk" id="category_id_fk"> 
    <?php 

   $insval = new InsertValidate($conn);
   $get = $insval->getCategory();

      echo "<option selected disabled value=''>Type Switcher</option>"; 
        while($product = $get->fetch())
        {
            $id_encrypt = encrypt($product['category_id']);
            echo "<option value='{$id_encrypt}'>{$product['name']}</option>";
        }
    ?>
    </select> 
    
    </div>
    <div class="createProductMain__element">
    <label id="description" for="product-description" style="display:none">Product description</label>
    <textarea id="product-description" name="description" rows="4" cols="50" style="display:none"></textarea>
    </div>
    </div>
 <div class="inputsContainer">
   <?php require_once __DIR__ . "/cd.php";?>
   <?php require_once __DIR__ . "/furniture.php";?> 
   <?php require_once __DIR__ . "/book.php";?>
  </div>
   </div>
</form> 


<script>
const product = new ProductDescription();
product.displayInputs();

</script>
</body>
</html>