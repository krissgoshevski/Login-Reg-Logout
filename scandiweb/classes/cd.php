<?php

namespace MyClassCd;
require_once __DIR__ . "/conndb.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/../interfaces/interface.php";


require_once __DIR__ . "/myExceptions.php";
use MyExceptions\ExInvalidPrefixCd;
use MyExceptions\Exinvalidsku;
use MainLogicClass\ProductValidator;


class Cd extends ProductValidator 
{
   

    public function __construct($conn) {
       parent::__construct($conn);
       
    }

    public function checkRequestMethod() {
        parent::checkRequestMethod();
        
    }

  
 // begins with 2 string - and 6 chars, always + must begins with CD-
    public function validateInputDataSku($sku)
    {
    
    $prefix = substr($sku, 0, 3);
    $sku_pattern = '/^[A-Za-z]{2}-\d{6}$/';

    if($prefix !== 'CD-'){
      throw new ExInvalidPrefixCd();
    }

      if (!preg_match($sku_pattern, $sku)){
        throw new Exinvalidsku();
      }
    }

}

   



?>