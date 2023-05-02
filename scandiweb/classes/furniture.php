<?php 

namespace MyClassFurniture;


require_once __DIR__ . "/conndb.php";
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/../interfaces/interface.php";


use MainLogicClass\ProductValidator;
use Myexceptions\ExInvalidPrefixFur;
use MyExceptions\Exinvalidsku;


class Furniture extends ProductValidator 
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

            if($prefix !== 'FU-'){
            throw new ExInvalidPrefixFur();
            }
            
            if (!preg_match($sku_pattern, $sku)){
                throw new Exinvalidsku();
            }
        }

}



?>