<?php 
namespace MyClassBook;

require_once __DIR__ . "/conndb.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/../interfaces/interface.php";
require_once __DIR__ . "/myExceptions.php";


use MyExceptions\ExInvalidPrefixBook;
use MyExceptions\Exinvalidsku;
use MainLogicClass\ProductValidator;


class Book extends ProductValidator
{

    public function __construct($conn) {
        parent::__construct($conn);
        
     }

 
     public function checkRequestMethod() {
         parent::checkRequestMethod();
         
     }
     public function getSKU() {
        return $this->sku;
      }

     public function validateInputDataSku($sku)
     {
      // begins with 2 string - and 6 chars, always 
      $prefix = substr($sku, 0, 3);
      $sku_pattern = '/^[A-Za-z]{2}-\d{6}$/';
     
      if($prefix !== 'BO-'){
       throw new ExInvalidPrefixBook();
      }
      
       if (!preg_match($sku_pattern, $sku)){
         throw new Exinvalidsku();
       }
     }

    
    }

    





?>