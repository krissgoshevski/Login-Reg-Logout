<?php 
namespace MyConn;
use PDO;

require_once __DIR__ . "/../consts.php";


class Conndb {
    
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {
        $this->servername = DBSERVERNAME;
        $this->dbname = DBNAME;
        $this->charset = DBCHARSET;
        $this->username = DBUSERNAME;
        $this->password = DBPASSWORD;
        
      

       try{
        $db = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
        $pdoconn = new PDO($db, $this->username, $this->password);
        return $pdoconn;
       } 
       catch(\PDOException $ex) // \ to take from currently directorium
       {
        file_put_contents("pdoEx.txt", $ex->getMessage());
        header("Location: 404.php");
        die();
       }
      
    }
}

?>