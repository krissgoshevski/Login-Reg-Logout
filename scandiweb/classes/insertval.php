<?php
namespace MyVlInsert;

require_once __DIR__ . "/cd.php";
require_once __DIR__ . "/conndb.php";

use MyClassCd\Cd;
use MyConn\Conndb;


// extends from Cd class, Cd is Child of ProductValidator, Cd extends all from ProductValidator, ValidateInsert have access to all methods from ProductValidator and Cd 
class InsertValidate extends Cd
{

    public function __construct($conn) {
        parent::__construct($conn);
        
     }
 
     public function checkRequestMethod() {
         parent::checkRequestMethod();
         
     }

}

?>